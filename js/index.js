// App.start();

//Test API Rest (1 à la  fois)

Rest.get("product",1,"active=true","title ASC").done((resp) => {
    $('#main').hide().html(resp).fadeIn();
    $('#main p').css({
        'color':'red',
        'border':'2px solid black'
    });
})


// Rest.post("product","gravier","granulat").done((resp) => {
//     $('#main').hide().html(resp).fadeIn();
// })

// Rest.put({"product",2,"true","ciment","malaxage"}).done((resp) => {
//     $('#main').hide().html(resp).fadeIn();
// })

// Rest.delete(/* ... */).done((resp) => {
//     $('#main').hide().html(resp).fadeIn();
// })