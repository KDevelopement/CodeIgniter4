<?php

    namespace App\Types;

    class MenuLink extends Link
    {
        /**
         * @var int
         */
        public $order = 0;

        /**
         * @var MenuLink[]
         */
        public $subLinks = [];
    }
