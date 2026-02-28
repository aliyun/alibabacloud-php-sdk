<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Dara\Model;

class UnsubscribeTopicRequest extends Model
{
    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var string[]
     */
    public $topic;
    protected $_name = [
        'deviceName' => 'DeviceName',
        'iotInstanceId' => 'IotInstanceId',
        'productKey' => 'ProductKey',
        'topic' => 'Topic',
    ];

    public function validate()
    {
        if (\is_array($this->topic)) {
            Model::validateArray($this->topic);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }

        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }

        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }

        if (null !== $this->topic) {
            if (\is_array($this->topic)) {
                $res['Topic'] = [];
                $n1 = 0;
                foreach ($this->topic as $item1) {
                    $res['Topic'][$n1] = $item1;
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
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }

        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }

        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }

        if (isset($map['Topic'])) {
            if (!empty($map['Topic'])) {
                $model->topic = [];
                $n1 = 0;
                foreach ($map['Topic'] as $item1) {
                    $model->topic[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
