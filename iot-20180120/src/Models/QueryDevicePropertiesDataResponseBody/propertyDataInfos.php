<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDevicePropertiesDataResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDevicePropertiesDataResponseBody\propertyDataInfos\propertyDataInfo;

class propertyDataInfos extends Model
{
    /**
     * @var propertyDataInfo[]
     */
    public $propertyDataInfo;
    protected $_name = [
        'propertyDataInfo' => 'PropertyDataInfo',
    ];

    public function validate()
    {
        if (\is_array($this->propertyDataInfo)) {
            Model::validateArray($this->propertyDataInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->propertyDataInfo) {
            if (\is_array($this->propertyDataInfo)) {
                $res['PropertyDataInfo'] = [];
                $n1 = 0;
                foreach ($this->propertyDataInfo as $item1) {
                    $res['PropertyDataInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PropertyDataInfo'])) {
            if (!empty($map['PropertyDataInfo'])) {
                $model->propertyDataInfo = [];
                $n1 = 0;
                foreach ($map['PropertyDataInfo'] as $item1) {
                    $model->propertyDataInfo[$n1] = propertyDataInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
