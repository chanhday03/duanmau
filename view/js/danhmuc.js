function check() {
    let category = document.querySelector('#ten-loai');
    if (category.value.trim() === '') {
        alert('Bạn cần điền đầy đủ thông tin !');
        return false;
    }
    return true;
}
function checkUpdate() {
    let category = document.querySelector('#ten-loai');
    if (category.value.trim() === '') {
        alert('Bạn cần điền đầy đủ thông tin !');
        return false;
    }
    return true;
}
