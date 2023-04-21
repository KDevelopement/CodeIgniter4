<?php

    namespace App\Types;

    class Link
    {
        /**
         * @var string
         */
        public $title;

        /**
         * @var string
         */
        public $uri = "javascript:;";

        /**
         * Link constructor.
         * Fill variable from an array
         *
         * @param array|null $value
         */
        public function __construct(array $value = null)
        {
            if ($value != null) {
                foreach ($this as $key=>$item) {
                    if (key_exists($key, $value)) {
                        $this->$key = $value;
                    }
                }
            }
        }
    }
