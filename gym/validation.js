
    const fname=document.getElementByName('fname')
    const lname=document.getElementByName('lname')
    const username=document.getElementByName('username')
    const email=document.getElementByName('email')
    const password=document.getElementByName('password')

    form.addEventListner('submit',(e) =>{
        e.preventDefault()
    })