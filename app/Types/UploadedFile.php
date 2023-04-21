<?php

    namespace App\Types;

    class UploadedFile
    {
        public $path;
        public $fullPath;
        public $clientName;
        public $savedName;
        public $fileSize;
        public $fileType;

        /**
         * Check if the type is an image
         *
         * @return bool
         */
        public function isImage(): bool
        {
            return in_array(strtolower($this->fileType), ['png', 'jpg', 'jpeg', 'gif']);
        }
    }
