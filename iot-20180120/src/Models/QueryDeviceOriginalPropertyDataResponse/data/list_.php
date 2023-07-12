<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceOriginalPropertyDataResponse\data;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceOriginalPropertyDataResponse\data\list_\propertyInfo;
use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var propertyInfo[]
     */
    public $propertyInfo;
    protected $_name = [
        'propertyInfo' => 'PropertyInfo',
    ];

    public function validate()
    {
        Model::validateRequired('propertyInfo', $this->propertyInfo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->propertyInfo) {
            $res['PropertyInfo'] = [];
            if (null !== $this->propertyInfo && \is_array($this->propertyInfo)) {
                $n = 0;
                foreach ($this->propertyInfo as $item) {
                    $res['PropertyInfo'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['PropertyInfo'])) {
            if (!empty($map['PropertyInfo'])) {
                $model->propertyInfo = [];
                $n                   = 0;
                foreach ($map['PropertyInfo'] as $item) {
                    $model->propertyInfo[$n++] = null !== $item ? propertyInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
