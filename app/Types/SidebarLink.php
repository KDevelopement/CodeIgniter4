<?php

    namespace App\Types;

    class SidebarLink extends Link
    {
        /**
         * @var string
         */
        public $icon = "";

        /**
         * @var SidebarLink[]
         */
        public $subLinks = [];
    }
