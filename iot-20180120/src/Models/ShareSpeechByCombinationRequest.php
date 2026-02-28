<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Dara\Model;

class ShareSpeechByCombinationRequest extends Model
{
    /**
     * @var string
     */
    public $audioFormat;

    /**
     * @var string[]
     */
    public $combinationList;

    /**
     * @var string
     */
    public $deviceName;

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
    public $speechId;
    protected $_name = [
        'audioFormat' => 'AudioFormat',
        'combinationList' => 'CombinationList',
        'deviceName' => 'DeviceName',
        'iotId' => 'IotId',
        'iotInstanceId' => 'IotInstanceId',
        'productKey' => 'ProductKey',
        'speechId' => 'SpeechId',
    ];

    public function validate()
    {
        if (\is_array($this->combinationList)) {
            Model::validateArray($this->combinationList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audioFormat) {
            $res['AudioFormat'] = $this->audioFormat;
        }

        if (null !== $this->combinationList) {
            if (\is_array($this->combinationList)) {
                $res['CombinationList'] = [];
                $n1 = 0;
                foreach ($this->combinationList as $item1) {
                    $res['CombinationList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
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

        if (null !== $this->speechId) {
            $res['SpeechId'] = $this->speechId;
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
        if (isset($map['AudioFormat'])) {
            $model->audioFormat = $map['AudioFormat'];
        }

        if (isset($map['CombinationList'])) {
            if (!empty($map['CombinationList'])) {
                $model->combinationList = [];
                $n1 = 0;
                foreach ($map['CombinationList'] as $item1) {
                    $model->combinationList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
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

        if (isset($map['SpeechId'])) {
            $model->speechId = $map['SpeechId'];
        }

        return $model;
    }
}
