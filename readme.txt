# PHP Image File Manager

This repository contains two PHP scripts to manage image files:
1. **Directory Reader**: Reads a directory and retrieves a list of image files.
2. **File Uploader**: Handles uploading and validation of image files.

## Features

### 1. Directory Reader
- Reads a specified directory.
- Filters out non-image files and retrieves paths of images (`.jpg`, `.jpeg`, `.png`, `.gif`).

### 2. File Uploader
- Validates uploaded files to ensure they are images.
- Prevents overwriting of existing files.
- Limits file size to 5MB.
- Supports common image formats (`.jpg`, `.jpeg`, `.png`, `.gif`).

## Usage

### Prerequisites
- PHP 7.0 or higher.
- A web server (e.g., Apache) configured to handle PHP.

### Setup
1. Clone this repository:
   ```bash
   git clone https://github.com/HamzaCanDo/photo-gallery-php.git

