<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDevicePropertyStatusResponseBody\data;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDevicePropertyStatusResponseBody\data\list_\propertyStatusInfo;
use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var propertyStatusInfo[]
     */
    public $propertyStatusInfo;
    protected $_name = [
        'propertyStatusInfo' => 'PropertyStatusInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->propertyStatusInfo) {
            $res['PropertyStatusInfo'] = [];
            if (null !== $this->propertyStatusInfo && \is_array($this->propertyStatusInfo)) {
                $n = 0;
                foreach ($this->propertyStatusInfo as $item) {
                    $res['PropertyStatusInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PropertyStatusInfo'])) {
            if (!empty($map['PropertyStatusInfo'])) {
                $model->propertyStatusInfo = [];
                $n                         = 0;
                foreach ($map['PropertyStatusInfo'] as $item) {
                    $model->propertyStatusInfo[$n++] = null !== $item ? propertyStatusInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
