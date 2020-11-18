class Rest{

    static get(tableName,id,where,orderby){//table, id, where, orderby
    
       return $.get("rest/index.php",
        {
          table: tableName,
        id:id,
        where:where,
        orderby:orderby
        });
    }
    

    static post(tableName,title,description,id=null){//table, fields (k,v)
        /* ... */
    //    return $.post("rest/index.php",
    //   {
    //     table: tableName,
    //     title: title,
    //     description: description,
    //     id : id
      
    // })
    }
    static put(data){//table, id, fields (k,v)
        /* ... */
    //   return  $.ajax({
    //         url: 'rest/index.php',
    //         type: 'PUT',
    //         data:data
        // })
    }

    static delete(data){//table, id
        /* ... */
    }

}