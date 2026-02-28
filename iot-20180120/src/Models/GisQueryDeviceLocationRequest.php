<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\GisQueryDeviceLocationRequest\thingList;

class GisQueryDeviceLocationRequest extends Model
{
    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var thingList[]
     */
    public $thingList;
    protected $_name = [
        'iotInstanceId' => 'IotInstanceId',
        'thingList' => 'ThingList',
    ];

    public function validate()
    {
        if (\is_array($this->thingList)) {
            Model::validateArray($this->thingList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }

        if (null !== $this->thingList) {
            if (\is_array($this->thingList)) {
                $res['ThingList'] = [];
                $n1 = 0;
                foreach ($this->thingList as $item1) {
                    $res['ThingList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }

        if (isset($map['ThingList'])) {
            if (!empty($map['ThingList'])) {
                $model->thingList = [];
                $n1 = 0;
                foreach ($map['ThingList'] as $item1) {
                    $model->thingList[$n1] = thingList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
