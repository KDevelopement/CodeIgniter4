<?php

    namespace App\Modules;

    use App\Types\MenuLink;

    abstract class Bootstrap implements BaseBootstrap
    {
        /**
         * @var array
         */
        private $_data;

        /**
         * Set empty admin dashboard content as default
         *
         * @return string
         */
        public function getDashboard(): string
        {
            return "";
        }

        /**
         * Set empty member dashboard content as default
         *
         * @return string
         */
        public function getMemberDashboard(): string
        {
            return "";
        }

        /**
         * Set empty home preview content as default
         *
         * @return string
         */
        public function getHomePreview(): string
        {
            return "";
        }

        /**
         * @return MenuLink[]
         */
        public function menuList(): array
        {
            // Default is empty
            return [];
        }

        public function frontend()
        {
            // Do notting by default
        }

        public function backend()
        {
            // Do notting by default
        }

        public function membership()
        {
            // Do notting by default
        }

        /**
         * @inheritDoc
         * @return array
         */
        public function getData(): array
        {
            return $this->_data;
        }

        /**
         * @inheritDoc
         * @param array $data
         */
        public function setData(array $data): void
        {
            $this->_data = $data;
        }
    }
