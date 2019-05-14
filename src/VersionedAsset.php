<?php

    namespace Blixx\VersionedAsset;

    class VersionedAsset
    {

        public function asset($filename)
        {

            return asset($filename) . '?version=' . $this->getVersion($filename);

        }

        public function getVersion($filename)
        {

            if (file_exists(public_path($filename))){
                return sha1(filemtime(public_path($filename)));
            }
            else{
                return sha1(microtime(true));
            }

        }

    }
