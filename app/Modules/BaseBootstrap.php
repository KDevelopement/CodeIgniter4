<?php

    namespace App\Modules;

    use App\Types\Link;
    use App\Types\MenuLink;

    interface BaseBootstrap
    {
        /**
         * Returns Module title
         *
         * @return string
         */
        public function title(): string;

        /**
         * Returns Module description
         *
         * @return string
         */
        public function description(): string;

        /**
         * True means, this module has an admin dashboard
         *
         * @return bool
         */
        public function hasDashboard(): bool;

        /**
         * Return the admin dashboard content
         *
         * @return string
         */
        public function getDashboard(): string;

        /**
         * True means, this module has a member dashboard
         *
         * @return bool
         */
        public function hasMemberDashboard(): bool;

        /**
         * Return the member dashboard content
         *
         * @return string
         */
        public function getMemberDashboard(): string;

        /**
         * True means, this module has something to display in home
         *
         * @return bool
         */
        public function hasHomePreview(): bool;

        /**
         * Return the home preview content
         *
         * @return string
         */
        public function getHomePreview(): string;

        /**
         * A link list that will be able to add as header and footer menu
         *
         * @return MenuLink[]
         */
        public function menuList(): array;

        /**
         * General hooks on all frontend controllers
         *
         * @return void
         */
        public function frontend();

        /**
         * General hooks on all backend controllers
         *
         * @return void
         */
        public function backend();

        /**
         * General hooks on all membership controllers
         *
         * @return void
         */
        public function membership();

        /**
         * Returns database result of current module
         *
         * @return array
         */
        public function getData(): array;

        /**
         * Set database result of current module
         *
         * @param array $data
         */
        public function setData(array $data): void;
    }
