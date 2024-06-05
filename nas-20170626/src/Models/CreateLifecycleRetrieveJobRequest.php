<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class CreateLifecycleRetrieveJobRequest extends Model
{
    /**
     * @description The ID of the file system.
     *
     * This parameter is required.
     * @example 31a8e4****
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description The directories or files that you want to retrieve. You can specify a maximum of 10 paths.
     *
     * This parameter is required.
     * @example Paths.1=/pathway/doc1,Paths.2=/pathway/doc2
     *
     * @var string[]
     */
    public $paths;

    /**
     * @var string
     */
    public $storageType;
    protected $_name = [
        'fileSystemId' => 'FileSystemId',
        'paths'        => 'Paths',
        'storageType'  => 'StorageType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->paths) {
            $res['Paths'] = $this->paths;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLifecycleRetrieveJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['Paths'])) {
            if (!empty($map['Paths'])) {
                $model->paths = $map['Paths'];
            }
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }

        return $model;
    }
}
