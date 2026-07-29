<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gdb\V20190903\Models\DescribeAvailableResourceResponseBody\availableZoneList\availableZone\supportedSerialList\supportedSerial\supportedInstanceClassList\supportedInstanceClass;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gdb\V20190903\Models\DescribeAvailableResourceResponseBody\availableZoneList\availableZone\supportedSerialList\supportedSerial\supportedInstanceClassList\supportedInstanceClass\supportedStorageSizeList\supportedStorageSize;

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
        if (\is_array($this->supportedStorageSize)) {
            Model::validateArray($this->supportedStorageSize);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->supportedStorageSize) {
            if (\is_array($this->supportedStorageSize)) {
                $res['SupportedStorageSize'] = [];
                $n1 = 0;
                foreach ($this->supportedStorageSize as $item1) {
                    $res['SupportedStorageSize'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['SupportedStorageSize'])) {
            if (!empty($map['SupportedStorageSize'])) {
                $model->supportedStorageSize = [];
                $n1 = 0;
                foreach ($map['SupportedStorageSize'] as $item1) {
                    $model->supportedStorageSize[$n1] = supportedStorageSize::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
