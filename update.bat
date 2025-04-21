@echo off
echo Menambahkan semua perubahan...
git add .

set /p msg="Masukkan pesan commit: "
git commit -m "%msg%"

echo Mendorong ke GitHub...
git push

pause
