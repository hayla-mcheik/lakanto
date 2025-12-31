@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Add Products
                    <a href="{{ url('admin/products') }}" class="btn btn-danger btn-sm float-end">
                        Back
                    </a>
                </h4>
            </div>

            <div class="card-body">
                @if($errors->any())
                <div class="alert alert-warning">
                    @foreach($errors->all() as $error)
                    <div>{{ $error }}</div>
                    @endforeach
                </div>
                @endif

                @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                @endif

                <form action="{{ url('admin/products') }}" method="POST" enctype="multipart/form-data" id="productForm">
                    @csrf
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">
                                Home
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="seotag-tab" data-bs-toggle="tab" data-bs-target="#seotag-tab-pane" type="button" role="tab" aria-controls="seotag-tab-pane" aria-selected="false">
                                SEO Tags
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="details-tab" data-bs-toggle="tab" data-bs-target="#details-tab-pane" type="button" role="tab" aria-controls="details-tab-pane" aria-selected="false">
                                Details
                            </button>
                        </li> 
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="image-tab" data-bs-toggle="tab" data-bs-target="#image-tab-pane" type="button" role="tab" aria-controls="image-tab-pane" aria-selected="false">
                                Product Images <span class="text-danger">*</span>
                            </button>
                        </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade border p-3 show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                            <div class="mb-3">
                                <label>Category</label>
                                <select name="category_id" class="form-control">
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label>Product Name</label>
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}" />
                            </div>

                            <div class="mb-3">
                                <label>Slug</label>
                                <input type="text" class="form-control" name="slug" value="{{ old('slug') }}" />
                            </div>

                            <div class="mb-3">
                                <label>Small Description (500 words)</label>
                                <textarea class="form-control" name="small_description" rows="4">{{ old('small_description') }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label>Description</label>
                                <textarea class="form-control" name="description" rows="4">{{ old('description') }}</textarea>
                            </div>
                        </div>

                        <div class="tab-pane fade border p-3" id="seotag-tab-pane" role="tabpanel" aria-labelledby="seotag-tab" tabindex="0">
                            <div class="mb-3">
                                <label>Meta Title</label>
                                <input type="text" class="form-control" name="meta_title" value="{{ old('meta_title') }}" />
                            </div>

                            <div class="mb-3">
                                <label>Meta Keyword</label>
                                <textarea class="form-control" name="meta_keyword" rows="4">{{ old('meta_keyword') }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label>Meta Description</label>
                                <textarea class="form-control" name="meta_description" rows="4">{{ old('meta_description') }}</textarea>
                            </div>
                        </div>

                        <div class="tab-pane fade border p-3" id="details-tab-pane" role="tabpanel" aria-labelledby="details-tab" tabindex="0">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label>Original Price</label>
                                        <input type="text" class="form-control" name="original_price" value="{{ old('original_price') }}" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label>Selling Price</label>
                                        <input type="text" class="form-control" name="selling_price" value="{{ old('selling_price') }}" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label>Quantity</label>
                                        <input type="number" class="form-control" name="quantity" value="{{ old('quantity') }}" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label>Trending</label>
                                        <input type="checkbox" name="trending" style="width:30px; height:30px;" {{ old('trending') ? 'checked' : '' }} />
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label>Featured</label>
                                        <input type="checkbox" name="featured" style="width:30px; height:30px;" {{ old('featured') ? 'checked' : '' }} />
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label>Status</label>
                                        <input type="checkbox" name="status" style="width:30px; height:30px;" {{ old('status') ? 'checked' : '' }} />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade border p-3" id="image-tab-pane" role="tabpanel" aria-labelledby="image-tab" tabindex="0">
                            <div class="alert alert-info">
                                <strong><i class="fas fa-info-circle"></i> Important:</strong> You must upload at least 2 images - front view and back view of the product are required.
                            </div>
                            
                            <div class="mb-3">
                                <label>Upload Product Images <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="file" name="image[]" multiple class="form-control" id="productImages" accept="image/*">
                                    <button type="button" class="btn btn-outline-primary" onclick="document.getElementById('productImages').click()">
                                        <i class="fas fa-folder-open"></i> Browse
                                    </button>
                                </div>
                                <small class="text-muted">Select at least 2 images (front and back). Hold Ctrl/Cmd to select multiple files.</small>
                                
                                @error('image')
                                <div class="text-danger mt-2">
                                    <i class="fas fa-exclamation-triangle"></i> {{ $message }}
                                </div>
                                @enderror
                                
                                @error('image.*')
                                <div class="text-danger mt-2">
                                    <i class="fas fa-exclamation-triangle"></i> {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <label>Selected Images:</label>
                                    <span id="imageCountBadge" class="badge bg-secondary">0 images selected</span>
                                </div>
                                
                                <div class="progress mt-2" style="height: 10px;">
                                    <div id="imageProgressBar" class="progress-bar" role="progressbar" style="width: 0%"></div>
                                </div>
                            </div>

                            <div id="imagePreview" class="row mb-3">
                                <!-- Image previews will appear here -->
                            </div>
                            
                            <div id="imageRequirements" class="alert alert-warning d-none">
                                <i class="fas fa-exclamation-circle"></i> <span id="requirementMessage"></span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary" id="submitBtn">
                            <i class="fas fa-save"></i> Submit Product
                        </button>
                        <button type="reset" class="btn btn-secondary">
                            <i class="fas fa-redo"></i> Reset
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const productImages = document.getElementById('productImages');
    const imagePreview = document.getElementById('imagePreview');
    const imageCountBadge = document.getElementById('imageCountBadge');
    const imageProgressBar = document.getElementById('imageProgressBar');
    const imageRequirements = document.getElementById('imageRequirements');
    const requirementMessage = document.getElementById('requirementMessage');
    const submitBtn = document.getElementById('submitBtn');
    const form = document.getElementById('productForm');
    const imageTab = document.querySelector('#image-tab');

    // Function to update image count and progress
    function updateImageCount(files) {
        const count = files.length;
        
        // Update badge
        imageCountBadge.textContent = `${count} image${count !== 1 ? 's' : ''} selected`;
        
        // Update progress bar
        const progressPercentage = Math.min((count / 2) * 100, 100);
        imageProgressBar.style.width = `${progressPercentage}%`;
        
        // Update badge color and progress bar color
        if (count < 2) {
            imageCountBadge.className = 'badge bg-danger';
            imageProgressBar.className = 'progress-bar bg-danger';
            imageRequirements.classList.remove('d-none');
            requirementMessage.textContent = `Please select ${2 - count} more image${2 - count !== 1 ? 's' : ''} (minimum 2 required)`;
            submitBtn.disabled = true;
        } else {
            imageCountBadge.className = 'badge bg-success';
            imageProgressBar.className = 'progress-bar bg-success';
            imageRequirements.classList.add('d-none');
            submitBtn.disabled = false;
        }
    }

    // Function to create image preview
    function createImagePreview(file, index) {
        return new Promise((resolve) => {
            if (file.type.match('image.*')) {
                const reader = new FileReader();
                
                reader.onload = function(e) {
                    const col = document.createElement('div');
                    col.className = 'col-md-3 mb-3';
                    
                    const card = document.createElement('div');
                    card.className = 'card h-100';
                    
                    const imgContainer = document.createElement('div');
                    imgContainer.className = 'position-relative';
                    
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.className = 'card-img-top';
                    img.style.height = '150px';
                    img.style.objectFit = 'cover';
                    
                    const badge = document.createElement('span');
                    badge.className = 'position-absolute top-0 start-0 badge bg-primary';
                    badge.textContent = `#${index + 1}`;
                    badge.style.fontSize = '0.8em';
                    
                    imgContainer.appendChild(img);
                    imgContainer.appendChild(badge);
                    
                    const cardBody = document.createElement('div');
                    cardBody.className = 'card-body p-2';
                    
                    const fileName = document.createElement('p');
                    fileName.className = 'card-text small text-truncate mb-0';
                    fileName.textContent = file.name.length > 20 ? 
                        file.name.substring(0, 20) + '...' : file.name;
                    
                    const fileSize = document.createElement('p');
                    fileSize.className = 'card-text small text-muted';
                    const sizeInKB = Math.round(file.size / 1024);
                    fileSize.textContent = `${sizeInKB} KB`;
                    
                    cardBody.appendChild(fileName);
                    cardBody.appendChild(fileSize);
                    card.appendChild(imgContainer);
                    card.appendChild(cardBody);
                    col.appendChild(card);
                    
                    resolve(col);
                };
                
                reader.readAsDataURL(file);
            } else {
                resolve(null);
            }
        });
    }

    // Handle image selection
    productImages.addEventListener('change', async function() {
        // Clear previous previews
        imagePreview.innerHTML = '';
        
        const files = this.files;
        
        // Update count and progress
        updateImageCount(files);
        
        // Create previews for each image
        if (files.length > 0) {
            for (let i = 0; i < files.length; i++) {
                const preview = await createImagePreview(files[i], i);
                if (preview) {
                    imagePreview.appendChild(preview);
                }
            }
        }
    });

    // Form validation before submit
    form.addEventListener('submit', function(e) {
        const files = productImages.files;
        
        if (files.length < 2) {
            e.preventDefault();
            
            // Show alert
            Swal.fire({
                icon: 'error',
                title: 'Images Required',
                html: `Please upload at least 2 images (front and back views).<br><br>
                       <strong>Currently selected:</strong> ${files.length} image${files.length !== 1 ? 's' : ''}`,
                confirmButtonText: 'OK',
                confirmButtonColor: '#3085d6',
            }).then((result) => {
                // Switch to images tab after user clicks OK
                if (result.isConfirmed) {
                    const tab = new bootstrap.Tab(imageTab);
                    tab.show();
                    productImages.focus();
                }
            });
        }
    });

    // Clear previews when form is reset
    form.addEventListener('reset', function() {
        imagePreview.innerHTML = '';
        imageCountBadge.textContent = '0 images selected';
        imageCountBadge.className = 'badge bg-secondary';
        imageProgressBar.style.width = '0%';
        imageProgressBar.className = 'progress-bar';
        imageRequirements.classList.add('d-none');
        submitBtn.disabled = false;
    });

    // Initialize with any existing validation errors
    @if($errors->has('image') || $errors->has('image.*'))
        // Switch to images tab if there are image errors
        const tab = new bootstrap.Tab(imageTab);
        tab.show();
    @endif
});
</script>

@if(!isset($swal))
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endif

<style>
    .progress-bar {
        transition: width 0.3s ease;
    }
    
    .card {
        transition: transform 0.2s;
    }
    
    .card:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    
    #imagePreview img {
        cursor: pointer;
    }
    
    .nav-link.active {
        font-weight: 600;
    }
</style>
@endsection