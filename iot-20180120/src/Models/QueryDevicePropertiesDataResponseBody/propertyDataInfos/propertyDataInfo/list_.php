<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDevicePropertiesDataResponseBody\propertyDataInfos\propertyDataInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDevicePropertiesDataResponseBody\propertyDataInfos\propertyDataInfo\list_\propertyInfo;

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
        if (\is_array($this->propertyInfo)) {
            Model::validateArray($this->propertyInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->propertyInfo) {
            if (\is_array($this->propertyInfo)) {
                $res['PropertyInfo'] = [];
                $n1 = 0;
                foreach ($this->propertyInfo as $item1) {
                    $res['PropertyInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PropertyInfo'])) {
            if (!empty($map['PropertyInfo'])) {
                $model->propertyInfo = [];
                $n1 = 0;
                foreach ($map['PropertyInfo'] as $item1) {
                    $model->propertyInfo[$n1] = propertyInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
