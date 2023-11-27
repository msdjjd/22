<?php
    class ProductView {
        
        function add(){
            $fragment = file_get_contents(STATIC_DIR . 'sales/product/create.html', true);
            $message =  "today is a great day";
            $html = Template($fragment)->render(["MESSAGE"=>$message]);

            $dict =  ["TITLE" => "Agregar producto" , "MESSAGE"=> $message, "CONTENT"=>$html];
            print Template()->show($dict);

        }
        function list($collection = [] ){
            $fragment = file_get_contents(
            STATIC_DIR . "sales/product/list.html");
            $html = Template($fragment)->render_regex('LISTADO', $collection);
            $dict =  ["TITLE" => "Listado de producto" , "CONTENT"=>$html];

            print Template('Listado de producto')->show($dict);

        }
        function edit($obj =  [] ){
            $fragment = file_get_contents(
                STATIC_DIR . "sales/product/edit.html");
            $html = Template($fragment)->render($obj);
            print Template('Editar producto')->show($html);
        }
    }
?>
