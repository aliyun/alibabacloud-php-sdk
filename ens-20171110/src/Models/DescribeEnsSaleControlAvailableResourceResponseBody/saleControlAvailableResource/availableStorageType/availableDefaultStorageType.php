<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsSaleControlAvailableResourceResponseBody\saleControlAvailableResource\availableStorageType;

use AlibabaCloud\Tea\Model;

class availableDefaultStorageType extends Model
{
    /**
     * @var string
     */
    public $storageName;

    /**
     * @var string
     */
    public $storageType;
    protected $_name = [
        'storageName' => 'StorageName',
        'storageType' => 'StorageType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->storageName) {
            $res['StorageName'] = $this->storageName;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return availableDefaultStorageType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StorageName'])) {
            $model->storageName = $map['StorageName'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }

        return $model;
    }
}
