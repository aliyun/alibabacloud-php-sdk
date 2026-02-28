<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Dara\Model;

class PushSpeechRequest extends Model
{
    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $iotId;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var string
     */
    public $projectCode;

    /**
     * @var string
     */
    public $pushMode;

    /**
     * @var string[]
     */
    public $speechCodeList;
    protected $_name = [
        'deviceName' => 'DeviceName',
        'groupId' => 'GroupId',
        'iotId' => 'IotId',
        'iotInstanceId' => 'IotInstanceId',
        'productKey' => 'ProductKey',
        'projectCode' => 'ProjectCode',
        'pushMode' => 'PushMode',
        'speechCodeList' => 'SpeechCodeList',
    ];

    public function validate()
    {
        if (\is_array($this->speechCodeList)) {
            Model::validateArray($this->speechCodeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }

        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }

        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }

        if (null !== $this->projectCode) {
            $res['ProjectCode'] = $this->projectCode;
        }

        if (null !== $this->pushMode) {
            $res['PushMode'] = $this->pushMode;
        }

        if (null !== $this->speechCodeList) {
            if (\is_array($this->speechCodeList)) {
                $res['SpeechCodeList'] = [];
                $n1 = 0;
                foreach ($this->speechCodeList as $item1) {
                    $res['SpeechCodeList'][$n1] = $item1;
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

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }

        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }

        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }

        if (isset($map['ProjectCode'])) {
            $model->projectCode = $map['ProjectCode'];
        }

        if (isset($map['PushMode'])) {
            $model->pushMode = $map['PushMode'];
        }

        if (isset($map['SpeechCodeList'])) {
            if (!empty($map['SpeechCodeList'])) {
                $model->speechCodeList = [];
                $n1 = 0;
                foreach ($map['SpeechCodeList'] as $item1) {
                    $model->speechCodeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
