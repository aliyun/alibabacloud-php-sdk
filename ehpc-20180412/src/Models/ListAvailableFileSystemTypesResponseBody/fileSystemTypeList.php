<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListAvailableFileSystemTypesResponseBody;

use AlibabaCloud\Tea\Model;

class fileSystemTypeList extends Model
{
    /**
     * @var string
     */
    public $fileSystemType;

    /**
     * @var bool
     */
    public $available;

    /**
     * @var string
     */
    public $protocolType;

    /**
     * @var string[]
     */
    public $storageTypes;
    protected $_name = [
        'fileSystemType' => 'FileSystemType',
        'available'      => 'Available',
        'protocolType'   => 'ProtocolType',
        'storageTypes'   => 'StorageTypes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileSystemType) {
            $res['FileSystemType'] = $this->fileSystemType;
        }
        if (null !== $this->available) {
            $res['Available'] = $this->available;
        }
        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }
        if (null !== $this->storageTypes) {
            $res['StorageTypes'] = $this->storageTypes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fileSystemTypeList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileSystemType'])) {
            $model->fileSystemType = $map['FileSystemType'];
        }
        if (isset($map['Available'])) {
            $model->available = $map['Available'];
        }
        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }
        if (isset($map['StorageTypes'])) {
            if (!empty($map['StorageTypes'])) {
                $model->storageTypes = $map['StorageTypes'];
            }
        }

        return $model;
    }
}
