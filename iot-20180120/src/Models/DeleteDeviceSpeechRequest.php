<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\DeleteDeviceSpeechRequest\deviceSpeechList;

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
        'iotId' => 'IotId',
        'iotInstanceId' => 'IotInstanceId',
    ];

    public function validate()
    {
        if (\is_array($this->deviceSpeechList)) {
            Model::validateArray($this->deviceSpeechList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceSpeechList) {
            if (\is_array($this->deviceSpeechList)) {
                $res['DeviceSpeechList'] = [];
                $n1 = 0;
                foreach ($this->deviceSpeechList as $item1) {
                    $res['DeviceSpeechList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceSpeechList'])) {
            if (!empty($map['DeviceSpeechList'])) {
                $model->deviceSpeechList = [];
                $n1 = 0;
                foreach ($map['DeviceSpeechList'] as $item1) {
                    $model->deviceSpeechList[$n1] = deviceSpeechList::fromMap($item1);
                    ++$n1;
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
