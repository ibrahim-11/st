//App.start();

//Test API Rest

Rest.get({
    table: "product",
    id: 0,
    where: "active = true",
    orderby: "title ASC"
}).done((resp) => {
    $('#main').hide().html(resp).fadeIn();
})

Rest.post({
    table: "product",
    fields: {
        title: "titre du produit",
        active: true,
        onsale: false
    }
}).done((resp) => {
    $('#main').hide().html(resp).fadeIn();
})

Rest.put({
    table: "product",
    id: 1,
    fields: {
        title: "titre du produit",
        active: true,
        onsale: false
    }
}).done((resp) => {
    $('#main').hide().html(resp).fadeIn();
})

Rest.delete({
    table: "product",
    id: 1
}).done((resp) => {
    $('#main').hide().html(resp).fadeIn();
})