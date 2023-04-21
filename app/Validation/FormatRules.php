<?php

    namespace App\Validation;

    /**
     * Class FormatRules
     * This class has been created to reset/customize some CodeIgniter original rules.
     *
     * @package App\Validation
     */
    class FormatRules extends \CodeIgniter\Validation\FormatRules
    {
        /**
         * Reset the original rules
         *
         * @param string|null $str
         * @return bool
         */
        public function valid_url(string $str = null): bool
        {
            // Ignore empty values
            if (empty($str)) {
                return true;
            }

            return parent::valid_url($str);
        }
    }
