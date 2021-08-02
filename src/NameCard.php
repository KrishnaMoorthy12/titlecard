<?php

/**
 * @brief NameCard class has Many type of functions
 * to generate NameCard.
 */
class NameCard
{
    /**
     * @brief Renders a plain card in svg format.
     * 
     * @param intro : The intro text of the card
     * @param name : The name of the card
     * @param about : The about text of the card
     * @param fg : The foreground color of the card
     * @param bg : The background color of the card
     * @param width : The width of the card
     * @param height : The height of the card
     * @param radius : The radius of the rounded corners
     * 
     * @return string svg string
     */
    static function Plain (
        string  $intro      =   "Hi!, am",
        string  $name       =   "",
        string  $about      =   "",
        string  $fg         =   "white",
        string  $bg         =   "#262b2f",
        int     $width      =   600,
        int     $height     =   300,
        int     $radius     =   0,
    ) {
        return "
            <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 $width $height'>
                <defs>
                    <style type='text/css'>
                        #container{
                            width: {$width}px;
                            height: {$height}px;
                            box-sizing: border-box;
                            padding: 10px;
                            color: $fg;
                            background: $bg;
                            display: flex;
                            flex-direction: column;
                            align-items: center;
                            justify-content: center;
                            border-radius: {$radius}px;
                        }

                        #container > #intro {
                            font-size: 150%;
                        }

                        #container > #name {
                            font-size: 200%;
                        }

                        #container > #about {
                                font-size: 150%;
                        }
                    </style>
                </defs>

                <foreignObject x='0' y='0' width='$width' height='$height'>
                    <div xmlns='http://www.w3.org/1999/xhtml' id='container'>
                        <div id='intro'>
                            $intro
                        </div>
                        <div id='name'>
                            $name
                        </div>
                        <div id='about'>
                            $about
                        </div>
                    </div>
                </foreignObject>
            </svg>
        ";
    }
}

?>
