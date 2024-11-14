## Cara Upload GIthub Ke VPS

---

## Pre-Request

PHP Version 8.2 Harus Sudah Terisnstall di server
Asumsi bahwa vhost sudah di setting dari awal

---

## Step Code

1. buat folder `.github/workflows/main.yml`
2. buat file deploy.yml
3. buat file bash.sh

## Step Server

1. Buat ssh keygen di local `ssh-keygen -t rsa -b 4096 -C "github"`

2. Copy client `~/.ssh/github` ke github secret key

3. Copy `~/.ssh/github.pub` key ke server

4. Copy username & IP ke github
