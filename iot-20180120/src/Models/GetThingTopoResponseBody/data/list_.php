<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\GetThingTopoResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetThingTopoResponseBody\data\list_\deviceInfo;

class list_ extends Model
{
    /**
     * @var deviceInfo[]
     */
    public $deviceInfo;
    protected $_name = [
        'deviceInfo' => 'deviceInfo',
    ];

    public function validate()
    {
        if (\is_array($this->deviceInfo)) {
            Model::validateArray($this->deviceInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceInfo) {
            if (\is_array($this->deviceInfo)) {
                $res['deviceInfo'] = [];
                $n1 = 0;
                foreach ($this->deviceInfo as $item1) {
                    $res['deviceInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['deviceInfo'])) {
            if (!empty($map['deviceInfo'])) {
                $model->deviceInfo = [];
                $n1 = 0;
                foreach ($map['deviceInfo'] as $item1) {
                    $model->deviceInfo[$n1] = deviceInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
