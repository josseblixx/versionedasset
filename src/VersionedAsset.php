<?php

    namespace Blixx\VersionedAsset;

    class VersionedAsset
    {

        public function asset($filename)
        {

            return asset($filename) . '?version=' . $this->slice($this->getVersion($filename));

        }

        private function slice($val)
        {

            $res = chunk_split($val, 5, '-');

            return substr($res, 0, 22);

        }

        private function getVersion($filename)
        {

            if (file_exists(public_path($filename))){
                return sha1(filemtime(public_path($filename)));
            }
            else{
                return sha1(microtime(true));
            }

        }

    }
