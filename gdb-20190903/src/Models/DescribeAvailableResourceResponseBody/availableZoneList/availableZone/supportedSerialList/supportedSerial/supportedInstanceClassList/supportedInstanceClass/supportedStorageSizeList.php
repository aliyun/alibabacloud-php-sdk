<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gdb\V20190903\Models\DescribeAvailableResourceResponseBody\availableZoneList\availableZone\supportedSerialList\supportedSerial\supportedInstanceClassList\supportedInstanceClass;

use AlibabaCloud\SDK\Gdb\V20190903\Models\DescribeAvailableResourceResponseBody\availableZoneList\availableZone\supportedSerialList\supportedSerial\supportedInstanceClassList\supportedInstanceClass\supportedStorageSizeList\supportedStorageSize;
use AlibabaCloud\Tea\Model;

class supportedStorageSizeList extends Model
{
    /**
     * @var supportedStorageSize[]
     */
    public $supportedStorageSize;
    protected $_name = [
        'supportedStorageSize' => 'SupportedStorageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportedStorageSize) {
            $res['SupportedStorageSize'] = [];
            if (null !== $this->supportedStorageSize && \is_array($this->supportedStorageSize)) {
                $n = 0;
                foreach ($this->supportedStorageSize as $item) {
                    $res['SupportedStorageSize'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedStorageSizeList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SupportedStorageSize'])) {
            if (!empty($map['SupportedStorageSize'])) {
                $model->supportedStorageSize = [];
                $n                           = 0;
                foreach ($map['SupportedStorageSize'] as $item) {
                    $model->supportedStorageSize[$n++] = null !== $item ? supportedStorageSize::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
