<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteDeviceSpeechRequest\deviceSpeechList;
use AlibabaCloud\Tea\Model;

class DeleteDeviceSpeechRequest extends Model
{
    /**
     * @var deviceSpeechList[]
     */
    public $deviceSpeechList;

    /**
     * @var string
     */
    public $iotId;

    /**
     * @var string
     */
    public $iotInstanceId;
    protected $_name = [
        'deviceSpeechList' => 'DeviceSpeechList',
        'iotId'            => 'IotId',
        'iotInstanceId'    => 'IotInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceSpeechList) {
            $res['DeviceSpeechList'] = [];
            if (null !== $this->deviceSpeechList && \is_array($this->deviceSpeechList)) {
                $n = 0;
                foreach ($this->deviceSpeechList as $item) {
                    $res['DeviceSpeechList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteDeviceSpeechRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceSpeechList'])) {
            if (!empty($map['DeviceSpeechList'])) {
                $model->deviceSpeechList = [];
                $n                       = 0;
                foreach ($map['DeviceSpeechList'] as $item) {
                    $model->deviceSpeechList[$n++] = null !== $item ? deviceSpeechList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }

        return $model;
    }
}
