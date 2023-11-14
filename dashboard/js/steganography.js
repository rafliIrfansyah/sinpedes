var imagedatauri;

function readURL(input){
    var reader = new FileReader();
    reader.onload = (e) => {
        imagedatauri = e.target.result;
        document.querySelector('#image1').src = e.target.result;
    }
    reader.readAsDataURL(input.files[0]);
}

function hideText(){
    document.querySelector('#image2').src = steg.encode(document.querySelector('#pesanRahasia').value , imagedatauri);
}

function decode(input){
    var reader = new FileReader();
    reader.onload = (e) => {
        document.querySelector('#decoded').innerText = steg.decode(e.target.result);
    }
    reader.readAsDataURL(input.files[0]);
}