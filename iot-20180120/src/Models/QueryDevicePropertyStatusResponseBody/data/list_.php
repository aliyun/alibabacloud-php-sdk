<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDevicePropertyStatusResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDevicePropertyStatusResponseBody\data\list_\propertyStatusInfo;

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
        if (\is_array($this->propertyStatusInfo)) {
            Model::validateArray($this->propertyStatusInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->propertyStatusInfo) {
            if (\is_array($this->propertyStatusInfo)) {
                $res['PropertyStatusInfo'] = [];
                $n1 = 0;
                foreach ($this->propertyStatusInfo as $item1) {
                    $res['PropertyStatusInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PropertyStatusInfo'])) {
            if (!empty($map['PropertyStatusInfo'])) {
                $model->propertyStatusInfo = [];
                $n1 = 0;
                foreach ($map['PropertyStatusInfo'] as $item1) {
                    $model->propertyStatusInfo[$n1] = propertyStatusInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
