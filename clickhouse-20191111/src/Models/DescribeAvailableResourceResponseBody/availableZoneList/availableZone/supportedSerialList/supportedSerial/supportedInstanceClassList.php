<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeAvailableResourceResponseBody\availableZoneList\availableZone\supportedSerialList\supportedSerial;

use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeAvailableResourceResponseBody\availableZoneList\availableZone\supportedSerialList\supportedSerial\supportedInstanceClassList\supportedInstanceClass;
use AlibabaCloud\Tea\Model;

class supportedInstanceClassList extends Model
{
    /**
     * @var supportedInstanceClass[]
     */
    public $supportedInstanceClass;
    protected $_name = [
        'supportedInstanceClass' => 'SupportedInstanceClass',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportedInstanceClass) {
            $res['SupportedInstanceClass'] = [];
            if (null !== $this->supportedInstanceClass && \is_array($this->supportedInstanceClass)) {
                $n = 0;
                foreach ($this->supportedInstanceClass as $item) {
                    $res['SupportedInstanceClass'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedInstanceClassList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SupportedInstanceClass'])) {
            if (!empty($map['SupportedInstanceClass'])) {
                $model->supportedInstanceClass = [];
                $n                             = 0;
                foreach ($map['SupportedInstanceClass'] as $item) {
                    $model->supportedInstanceClass[$n++] = null !== $item ? supportedInstanceClass::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
