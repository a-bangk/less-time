<#
.SYNOPSIS
Copy files to XAMPP folder to run them locally
#>
## Filter to only get relevent files
Copy-Item -Path "." -Destination "C:\xampp\htdocs\" -Recurse -Force 
