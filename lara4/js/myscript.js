console.log("In my script")
const other=document.getElementById('other')
const marriage=document.getElementById('marriage')
const single=document.getElementById('single')
const name_mm=document.getElementById('name_mm')

other.onclick=checkMarital;
marriage.onclick=checkMarital;
single.onclick=checkMarital;

name_mm.onblur=checkName;
name_mm.onfocus=checkName
function checkName(event)
{
    if(this.classList.contains('focused'))
    {
        if(this.value=='')
        {
            document.getElementById('name_error').innerHTML="Please enter your name in MM"
        }
        this.classList.remove('focused')
        this.classList.add('blurred')
    }
    else{
        document.getElementById('name_error').innerHTML=""
        this.classList.remove('blurred')
        this.classList.add('focused')
    }

    
    
}

function checkMarital()
{
    console.log(this.value)
    const text_other=document.getElementById('other_marital');
    if(this.value=="other")
    {
        text_other.classList.remove('d-none')
        text_other.classList.add('d-block')
    }
    else
    {
        text_other.classList.remove('d-block')
        text_other.classList.add('d-none')
    }
   

}


// other.addEventListener('click',function(){
//     marital_status=other.value
//     console.log("marital status : "+marital_status)
//     const text_other=document.getElementById('other_marital');
//     text_other.classList.remove('d-none')
//     text_other.classList.add('d-block')
// })

// marriage.onclick=function(){
//     const text_other=document.getElementById('other_marital');
//     if(text_other.classList.contains('d-block'))
//     {
//         text_other.classList.remove('d-block')
//         text_other.classList.add('d-none')
//     }
        
// }

// single.onclick=function(){
//     const text_other=document.getElementById('other_marital');
//     if(text_other.classList.contains('d-block'))
//     {
//         text_other.classList.remove('d-block')
//         text_other.classList.add('d-none')
//     }
// }