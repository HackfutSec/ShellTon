Website: https://02ba884.netsolhost.com/ShellTon.php
Webshell2 Update: https://02ba884.netsolhost.com/admin.php

# ShellTon - PHP File Manager

## Description

**ShellTon** is a simple and secure web-based file manager built with PHP. It allows you to manage files and directories on your server through an intuitive web interface. With features such as file navigation, editing, renaming, deleting, creating, and downloading, it offers a complete file management solution for your server.

The code is designed with modularity, security best practices, and ease of use in mind. Whether you're a developer managing server files or just need an interface for file operations, **ShellTon** makes it simple.

## Features

- **Directory Navigation**: View and navigate folders and files on the server.
- **File Management**: Delete, rename, edit, and download files directly from the web interface.
- **File Editing**: Edit text files directly within the interface.
- **File Creation**: Create new empty files in any directory.
- **File Download**: Download files from the server to your local machine.
- **Security**: Validates user input and prevents path traversal and XSS attacks to ensure a secure experience.

## Installation

### Prerequisites

- A web server running PHP 7.4 or higher.
- The project should be placed in a directory accessible by your web server.

### Installation Steps

1. **Clone the repository**:
   ```bash
   git clone https://github.com/HackfutSec/ShellTon.git
   cd ShellTon
   ```

2. **Set up your server**:
   - Place the files in your web server's root directory (e.g., `public_html` for Apache).
   - Make sure your web server can execute PHP files.

3. **Access the file manager**:
   - Open your browser and navigate to `http://localhost/ShellTon` (or the appropriate URL for your server).

## Code Structure

The code is organized in a modular, readable way. Here's an overview of the key parts of the project:

### 1. **Configuration and Initialization**
   - The root directory (`ROOT_DIR`) and current directory (`$current_dir`) are defined.
   - Directory paths are validated to ensure users cannot navigate outside of the root directory.

### 2. **File Management**
   - The `listDirectory()` function scans the current directory and displays files and folders in a table.
   - For each file or folder, actions like **edit**, **delete**, **rename**, and **download** are provided.

### 3. **Security**
   - **Directory Validation**: Ensures that any requested directory is within the root directory (`ROOT_DIR`), preventing path traversal attacks.
   - **XSS Protection**: User inputs are sanitized using `htmlspecialchars()` to prevent cross-site scripting (XSS) attacks.

### 4. **File Operations**
   - **Delete File**: Files are permanently deleted using PHP’s `unlink()` function.
   - **Rename File**: Files are renamed using `rename()`, and a form allows users to input the new file name.
   - **Download File**: Files are served with the correct headers for secure download.
   - **Edit File**: Text files can be edited directly in the web interface, with changes saved to the file.
   - **Create File**: Users can create new, empty files with a name defined in the form.

## Security Considerations

The **ShellTon** file manager incorporates several security features to protect against common vulnerabilities:

1. **Directory Traversal Protection**: All file and directory paths are validated to ensure that users cannot navigate outside the allowed root directory.
2. **Input Validation**: User inputs (e.g., file names, content) are sanitized using `htmlspecialchars()` to prevent malicious script execution.
3. **File Editing**: Only authorized actions (edit, delete, etc.) are allowed for files, preventing unauthorized execution of code.

## How It Works

### 1. **Directory Listing**

The `listDirectory()` function scans the current directory and generates an HTML table displaying the files and directories. Directories are listed first, followed by files. Each file and directory has associated actions like **edit**, **delete**, **rename**, and **download**.

### 2. **File Management**

- **Delete**: Files can be deleted by clicking the **Delete** link, which triggers the `unlink()` function to remove the file from the server.
- **Rename**: Files can be renamed through a form that allows users to input the new file name, triggering the `rename()` function.
- **Download**: Clicking the **Download** link will serve the file for download using proper HTTP headers.
- **Edit**: Files can be edited directly in the interface. Changes are saved to the file after the form is submitted.
- **Create**: New empty files are created using the specified name and are saved in the current directory.

### 3. **Uploading and Creating Files**

Users can upload files to the server using an HTML form. Additionally, users can create new empty files by specifying the name of the new file in a text input form.

## Technologies Used

- **PHP** (7.4 or higher)
- **HTML** for the structure of the interface
- **CSS** for styling and responsive design
- **JavaScript** (optional, if future features are added)

## Contributing

Contributions are welcome! If you'd like to improve the project, feel free to fork the repository and submit a pull request. Here are a few ideas to get started:

- Add the ability to create directories.
- Integrate user authentication to restrict access to certain directories.
- Improve the UI with additional JavaScript features (e.g., file previews before downloading).

## License

This project is licensed under the [MIT License](LICENSE).

---
- **Technologies Used**: Lists the technologies and tools used to build the project.
- **Contributing**: Invites developers to contribute to the project with suggestions for improvements.
- **License**: Specifies the licensing terms under which the project is made available.
