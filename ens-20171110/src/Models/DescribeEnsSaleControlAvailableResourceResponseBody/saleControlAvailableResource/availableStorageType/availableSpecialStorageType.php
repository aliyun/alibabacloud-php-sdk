<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsSaleControlAvailableResourceResponseBody\saleControlAvailableResource\availableStorageType;

use AlibabaCloud\Tea\Model;

class availableSpecialStorageType extends Model
{
    /**
     * @var string
     */
    public $storageType;

    /**
     * @var string
     */
    public $storageName;

    /**
     * @var string
     */
    public $ensRegionId;
    protected $_name = [
        'storageType' => 'StorageType',
        'storageName' => 'StorageName',
        'ensRegionId' => 'EnsRegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }
        if (null !== $this->storageName) {
            $res['StorageName'] = $this->storageName;
        }
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return availableSpecialStorageType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }
        if (isset($map['StorageName'])) {
            $model->storageName = $map['StorageName'];
        }
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }

        return $model;
    }
}
