<?php

namespace Installer;

use Composer\Installer\LibraryInstaller;
use Composer\Package\PackageInterface;

class Modules extends LibraryInstaller {

    public function supports($packageType): bool {
        return $packageType === 'modules';
    }

    public function getInstallPath(PackageInterface $package): string {
        $name = explode("/", $package->getName());
        $tmp_name = '';
        $arr = explode("-", $name[1]);
        foreach ($arr as $tmp){
            $tmp_name.=ucfirst($tmp);
        }
        return "modules/".$tmp_name."/";
    }

    /**
     * @inheritDoc
     */
    public function download(PackageInterface $package, PackageInterface $prevPackage = null) {
        // TODO
    }

    /**
     * @inheritDoc
     */
    public function prepare($type, PackageInterface $package, PackageInterface $prevPackage = null) {
        // TODO: Implement prepare() method.
    }

    /**
     * @inheritDoc
     */
    public function cleanup($type, PackageInterface $package, PackageInterface $prevPackage = null) {
        // TODO: Implement cleanup() method.
    }
}
