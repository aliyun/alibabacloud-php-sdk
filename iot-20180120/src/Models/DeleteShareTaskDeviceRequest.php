<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Dara\Model;

class DeleteShareTaskDeviceRequest extends Model
{
    /**
     * @var string[]
     */
    public $iotIdList;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $shareTaskId;
    protected $_name = [
        'iotIdList' => 'IotIdList',
        'iotInstanceId' => 'IotInstanceId',
        'shareTaskId' => 'ShareTaskId',
    ];

    public function validate()
    {
        if (\is_array($this->iotIdList)) {
            Model::validateArray($this->iotIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->iotIdList) {
            if (\is_array($this->iotIdList)) {
                $res['IotIdList'] = [];
                $n1 = 0;
                foreach ($this->iotIdList as $item1) {
                    $res['IotIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }

        if (null !== $this->shareTaskId) {
            $res['ShareTaskId'] = $this->shareTaskId;
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
        if (isset($map['IotIdList'])) {
            if (!empty($map['IotIdList'])) {
                $model->iotIdList = [];
                $n1 = 0;
                foreach ($map['IotIdList'] as $item1) {
                    $model->iotIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }

        if (isset($map['ShareTaskId'])) {
            $model->shareTaskId = $map['ShareTaskId'];
        }

        return $model;
    }
}
