<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeAvailableResourceResponseBody\availableZoneList\availableZone\supportedSerialList\supportedSerial\supportedInstanceClassList\supportedInstanceClass\supportedNodeCountList\supportedNodeCount;

use AlibabaCloud\Tea\Model;

class storageSize extends Model
{
    /**
     * @var string[]
     */
    public $storageSize;
    protected $_name = [
        'storageSize' => 'StorageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->storageSize) {
            $res['StorageSize'] = $this->storageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return storageSize
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StorageSize'])) {
            if (!empty($map['StorageSize'])) {
                $model->storageSize = $map['StorageSize'];
            }
        }

        return $model;
    }
}
