<?php
    class MainView {
        
        function showTrompetas(){
            $fragment = file_get_contents(STATIC_DIR . 'musica/Trompetas/trop.html', true);
            $dict =  ["TITLE" => "Trompetas" ,"CONTENT"=>$fragment];
            print Template()->show($dict);

        }
        function showTrombones(){
            $fragment = file_get_contents(STATIC_DIR . 'musica/Trombones/trb.html', true);
            $dict =  ["TITLE" => "Trombones" ,"CONTENT"=>$fragment];
            print Template()->show($dict);

        }

        function showClarinete(){
            $fragment = file_get_contents(STATIC_DIR . 'musica/Clarinetes/index.html', true);
            $dict =  ["TITLE" => "Trombones" ,"CONTENT"=>$fragment];
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
