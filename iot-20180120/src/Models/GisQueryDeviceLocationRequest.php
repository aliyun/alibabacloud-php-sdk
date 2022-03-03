<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\GisQueryDeviceLocationRequest\thingList;
use AlibabaCloud\Tea\Model;

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
        'thingList'     => 'ThingList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->thingList) {
            $res['ThingList'] = [];
            if (null !== $this->thingList && \is_array($this->thingList)) {
                $n = 0;
                foreach ($this->thingList as $item) {
                    $res['ThingList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GisQueryDeviceLocationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['ThingList'])) {
            if (!empty($map['ThingList'])) {
                $model->thingList = [];
                $n                = 0;
                foreach ($map['ThingList'] as $item) {
                    $model->thingList[$n++] = null !== $item ? thingList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
