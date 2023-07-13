<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class PushSpeechRequest extends Model
{
    /**
     * @example a1BwAGV****
     *
     * @var string
     */
    public $deviceName;

    /**
     * @example 4de2c367****8c585e5992**
     *
     * @var string
     */
    public $groupId;

    /**
     * @example 4de2c367****8c585e5992**
     *
     * @var string
     */
    public $iotId;

    /**
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @example light
     *
     * @var string
     */
    public $productKey;

    /**
     * @example 4de2c367****8c585e5992**
     *
     * @var string
     */
    public $projectCode;

    /**
     * @example SINGLE_DEVICE
     *
     * @var string
     */
    public $pushMode;

    /**
     * @example 4de2c367****8c585e5992**
     *
     * @var string[]
     */
    public $speechCodeList;
    protected $_name = [
        'deviceName'     => 'DeviceName',
        'groupId'        => 'GroupId',
        'iotId'          => 'IotId',
        'iotInstanceId'  => 'IotInstanceId',
        'productKey'     => 'ProductKey',
        'projectCode'    => 'ProjectCode',
        'pushMode'       => 'PushMode',
        'speechCodeList' => 'SpeechCodeList',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['SpeechCodeList'] = $this->speechCodeList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PushSpeechRequest
     */
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
                $model->speechCodeList = $map['SpeechCodeList'];
            }
        }

        return $model;
    }
}
