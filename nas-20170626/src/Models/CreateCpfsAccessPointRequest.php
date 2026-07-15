<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateCpfsAccessPointRequest\rootDirectory;

class CreateCpfsAccessPointRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $fileSystemId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var rootDirectory
     */
    public $rootDirectory;
    protected $_name = [
        'description' => 'Description',
        'fileSystemId' => 'FileSystemId',
        'regionId' => 'RegionId',
        'rootDirectory' => 'RootDirectory',
    ];

    public function validate()
    {
        if (null !== $this->rootDirectory) {
            $this->rootDirectory->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->rootDirectory) {
            $res['RootDirectory'] = null !== $this->rootDirectory ? $this->rootDirectory->toArray($noStream) : $this->rootDirectory;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RootDirectory'])) {
            $model->rootDirectory = rootDirectory::fromMap($map['RootDirectory']);
        }

        return $model;
    }
}
