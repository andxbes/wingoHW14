$(document).ready(function () {
    new StudentsList();



    $("#addUserB").on("click", function () {
        form = $("#addUser").serializeArray();
        //не смог нормально получить поля из формы , 
        //не провоцируя ее на отправку данных (перезагрузку ) , потому так . 
        var nameValue = form[0].value;
        var surnameValue = form[1].value;

        console.info(nameValue);

        $.ajax({
            url: "/controllers/addUser.php",
            type: 'POST',
            data: {
                name: nameValue,
                surname: surnameValue
            },
            success: function (data, textStatus, jqXHR) {
                console.info(data);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.info("Что-то пошло не так ..." + textStatus);
            }
        });
    });


    $("#addMarkB").on("click", function () {
       
        //не смог нормально получить поля из формы , 
        //не провоцируя ее на отправку данных (перезагрузку ) , потому так . 
        var subId = $("#subjectId option:selected").attr('id');
        var nameId =$("#studentId option:selected").attr('id');
        var mark = $("#mark").val();

        
        console.info(mark +"  "+ nameId);

        $.ajax({
            url: "/controllers/addMark.php",
            type: 'POST',
            data: {
                subId: subId,
                nameId: nameId,
                mark:mark
            },
            success: function (data, textStatus, jqXHR) {
                console.info(data);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.info("Что-то пошло не так ..." + textStatus);
            }
        });
    });


});


//функции вывода оценок под списком  на экран ----------------------------------
function StudentsList() {
    var ob = this;
    var $previusTable = null;

    $("#students_list li a").click(function () {
        ob.addTableWithRating(this);
      

        $("table[style!='display: none']").hide('slow');//убрать видимую таблицу 

        $(this).click(function () {
            $currentTable = $("#" + $(this).attr("id") + " ~table");
            $currentTable.toggle("slow");
           
        });

    });

    this.addTableWithRating = function (el) {
        var $el = $(el);
        $.ajax({
            url: "/controllers/get_table.php",
            type: 'POST',
            data: {
                id: $el.attr("id")
            },
            success: function (data, textStatus, jqXHR) {
                console.info(data);
                ob.buildTable($.parseJSON(data), $el);

            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.info("Что-то пошло не так ..." + textStatus);
            }


        });

    };

    this.buildTable = function (data, $el) {
        $("#" + $el.attr("id") + " ~table").remove();
        if (data.length === 0)
            return;
        $parent = $el.parent();

        var table = "<table><tr><th>Предмет</th><th>Оценка</th></tr> ";

        for (var i in data) {
            var dat = data[i];
            table += "<tr><td>" + dat.predmet + "</td><td>" + dat.mark + "</td></tr>";
        }
        table += "</table>";
        var $table = $(table).appendTo($parent);
        $table.hide();
        $table.toggle("slow");


    };

}




// -------------------------------------------------------------------------

