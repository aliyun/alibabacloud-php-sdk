<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gdb\V20190903\Models\DescribeAvailableResourceResponseBody\availableZoneList\availableZone\supportedSerialList\supportedSerial\supportedInstanceClassList\supportedInstanceClass\supportedStorageSizeList;

use AlibabaCloud\SDK\Gdb\V20190903\Models\DescribeAvailableResourceResponseBody\availableZoneList\availableZone\supportedSerialList\supportedSerial\supportedInstanceClassList\supportedInstanceClass\supportedStorageSizeList\supportedStorageSize\storageSize;
use AlibabaCloud\Tea\Model;

class supportedStorageSize extends Model
{
    /**
     * @var storageSize
     */
    public $storageSize;

    /**
     * @var string
     */
    public $storageType;
    protected $_name = [
        'storageSize' => 'StorageSize',
        'storageType' => 'StorageType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->storageSize) {
            $res['StorageSize'] = null !== $this->storageSize ? $this->storageSize->toMap() : null;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedStorageSize
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StorageSize'])) {
            $model->storageSize = storageSize::fromMap($map['StorageSize']);
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }

        return $model;
    }
}
