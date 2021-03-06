<?php

declare(strict_types=1);

namespace Templateschecker;

final class ScannerTemplates implements IScanner
{
    use TScanner;

    /**
     * @var string
     */
    protected $dirFrom;

    /**
     * @var string
     */
    protected $dirTo;

    public function setDirFrom(string $dir): void
    {
        if (!empty($dir)) {
            $this->dirFrom = $dir;
        }
    }

    public function setDirTo(string $dir): void
    {
        if (!empty($dir)) {
            $this->dirTo = $dir;
        }
    }

    public function scan(): void
    {
        $this->retrievesScannedFiles();
        $this->retrievesFlaggedFiles();
    }
}
