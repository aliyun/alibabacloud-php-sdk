<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDevicesHotStorageDataStatusResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDevicesHotStorageDataStatusResponseBody\data\list_\propertyStatusDataInfo;

class list_ extends Model
{
    /**
     * @var propertyStatusDataInfo[]
     */
    public $propertyStatusDataInfo;
    protected $_name = [
        'propertyStatusDataInfo' => 'PropertyStatusDataInfo',
    ];

    public function validate()
    {
        if (\is_array($this->propertyStatusDataInfo)) {
            Model::validateArray($this->propertyStatusDataInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->propertyStatusDataInfo) {
            if (\is_array($this->propertyStatusDataInfo)) {
                $res['PropertyStatusDataInfo'] = [];
                $n1 = 0;
                foreach ($this->propertyStatusDataInfo as $item1) {
                    $res['PropertyStatusDataInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PropertyStatusDataInfo'])) {
            if (!empty($map['PropertyStatusDataInfo'])) {
                $model->propertyStatusDataInfo = [];
                $n1 = 0;
                foreach ($map['PropertyStatusDataInfo'] as $item1) {
                    $model->propertyStatusDataInfo[$n1] = propertyStatusDataInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
