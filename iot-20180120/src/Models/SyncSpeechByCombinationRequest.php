<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class SyncSpeechByCombinationRequest extends Model
{
    /**
     * @example wav
     *
     * @var string
     */
    public $audioFormat;

    /**
     * @example ZFBDZ
     *
     * @var string[]
     */
    public $combinationList;

    /**
     * @example test
     *
     * @var string
     */
    public $deviceName;

    /**
     * @example false
     *
     * @var bool
     */
    public $enforceFlag;

    /**
     * @example Q7uOhVRdZRRlDnTLv****00100
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
     * @example a1BwAGV****
     *
     * @var string
     */
    public $productKey;

    /**
     * @example 42000011392021112380********
     *
     * @var string
     */
    public $speechId;
    protected $_name = [
        'audioFormat'     => 'AudioFormat',
        'combinationList' => 'CombinationList',
        'deviceName'      => 'DeviceName',
        'enforceFlag'     => 'EnforceFlag',
        'iotId'           => 'IotId',
        'iotInstanceId'   => 'IotInstanceId',
        'productKey'      => 'ProductKey',
        'speechId'        => 'SpeechId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioFormat) {
            $res['AudioFormat'] = $this->audioFormat;
        }
        if (null !== $this->combinationList) {
            $res['CombinationList'] = $this->combinationList;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->enforceFlag) {
            $res['EnforceFlag'] = $this->enforceFlag;
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

    /**
     * @param array $map
     *
     * @return SyncSpeechByCombinationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioFormat'])) {
            $model->audioFormat = $map['AudioFormat'];
        }
        if (isset($map['CombinationList'])) {
            if (!empty($map['CombinationList'])) {
                $model->combinationList = $map['CombinationList'];
            }
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['EnforceFlag'])) {
            $model->enforceFlag = $map['EnforceFlag'];
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
