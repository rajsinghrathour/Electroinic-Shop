function showhideham()
{
    let t=document.querySelector('#head-cont div:nth-child(2) ul');
{   if(t.style.display=='flex')
    {t.style.display='none'}
    else
    {t.style.display='flex'}
}  
}

let ham=document.querySelector('.hamburg')
ham.addEventListener('click',showhideham);

