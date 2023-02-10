<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class UpdateSubscribeRelationRequest extends Model
{
    /**
     * @example nJRaJPn5U1JITGfjBO9l00****
     *
     * @var string[]
     */
    public $consumerGroupIds;

    /**
     * @example true
     *
     * @var bool
     */
    public $deviceDataFlag;

    /**
     * @example true
     *
     * @var bool
     */
    public $deviceLifeCycleFlag;

    /**
     * @example true
     *
     * @var bool
     */
    public $deviceStatusChangeFlag;

    /**
     * @example true
     *
     * @var bool
     */
    public $deviceTagFlag;

    /**
     * @example true
     *
     * @var bool
     */
    public $deviceTopoLifeCycleFlag;

    /**
     * @example true
     *
     * @var bool
     */
    public $foundDeviceListFlag;

    /**
     * @example iot-cn-0pp1n8t****
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @example {     "queueName": "mns-test-topic1",     "regionName": "cn-shanghai",     "role": {         "roleArn": "acs:ram::5645***:role/aliyuniotaccessingmnsrole",         "roleName": "AliyunIOTAccessingMNSRole"     } }
     *
     * @var string
     */
    public $mnsConfiguration;

    /**
     * @example true
     *
     * @var bool
     */
    public $otaEventFlag;

    /**
     * @example true
     *
     * @var bool
     */
    public $otaJobFlag;

    /**
     * @example true
     *
     * @var bool
     */
    public $otaVersionFlag;

    /**
     * @example a1fyXVF****
     *
     * @var string
     */
    public $productKey;

    /**
     * @var string
     */
    public $subscribeFlags;

    /**
     * @example true
     *
     * @var bool
     */
    public $thingHistoryFlag;

    /**
     * @example AMQP
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'consumerGroupIds'        => 'ConsumerGroupIds',
        'deviceDataFlag'          => 'DeviceDataFlag',
        'deviceLifeCycleFlag'     => 'DeviceLifeCycleFlag',
        'deviceStatusChangeFlag'  => 'DeviceStatusChangeFlag',
        'deviceTagFlag'           => 'DeviceTagFlag',
        'deviceTopoLifeCycleFlag' => 'DeviceTopoLifeCycleFlag',
        'foundDeviceListFlag'     => 'FoundDeviceListFlag',
        'iotInstanceId'           => 'IotInstanceId',
        'mnsConfiguration'        => 'MnsConfiguration',
        'otaEventFlag'            => 'OtaEventFlag',
        'otaJobFlag'              => 'OtaJobFlag',
        'otaVersionFlag'          => 'OtaVersionFlag',
        'productKey'              => 'ProductKey',
        'subscribeFlags'          => 'SubscribeFlags',
        'thingHistoryFlag'        => 'ThingHistoryFlag',
        'type'                    => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consumerGroupIds) {
            $res['ConsumerGroupIds'] = $this->consumerGroupIds;
        }
        if (null !== $this->deviceDataFlag) {
            $res['DeviceDataFlag'] = $this->deviceDataFlag;
        }
        if (null !== $this->deviceLifeCycleFlag) {
            $res['DeviceLifeCycleFlag'] = $this->deviceLifeCycleFlag;
        }
        if (null !== $this->deviceStatusChangeFlag) {
            $res['DeviceStatusChangeFlag'] = $this->deviceStatusChangeFlag;
        }
        if (null !== $this->deviceTagFlag) {
            $res['DeviceTagFlag'] = $this->deviceTagFlag;
        }
        if (null !== $this->deviceTopoLifeCycleFlag) {
            $res['DeviceTopoLifeCycleFlag'] = $this->deviceTopoLifeCycleFlag;
        }
        if (null !== $this->foundDeviceListFlag) {
            $res['FoundDeviceListFlag'] = $this->foundDeviceListFlag;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->mnsConfiguration) {
            $res['MnsConfiguration'] = $this->mnsConfiguration;
        }
        if (null !== $this->otaEventFlag) {
            $res['OtaEventFlag'] = $this->otaEventFlag;
        }
        if (null !== $this->otaJobFlag) {
            $res['OtaJobFlag'] = $this->otaJobFlag;
        }
        if (null !== $this->otaVersionFlag) {
            $res['OtaVersionFlag'] = $this->otaVersionFlag;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->subscribeFlags) {
            $res['SubscribeFlags'] = $this->subscribeFlags;
        }
        if (null !== $this->thingHistoryFlag) {
            $res['ThingHistoryFlag'] = $this->thingHistoryFlag;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateSubscribeRelationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConsumerGroupIds'])) {
            if (!empty($map['ConsumerGroupIds'])) {
                $model->consumerGroupIds = $map['ConsumerGroupIds'];
            }
        }
        if (isset($map['DeviceDataFlag'])) {
            $model->deviceDataFlag = $map['DeviceDataFlag'];
        }
        if (isset($map['DeviceLifeCycleFlag'])) {
            $model->deviceLifeCycleFlag = $map['DeviceLifeCycleFlag'];
        }
        if (isset($map['DeviceStatusChangeFlag'])) {
            $model->deviceStatusChangeFlag = $map['DeviceStatusChangeFlag'];
        }
        if (isset($map['DeviceTagFlag'])) {
            $model->deviceTagFlag = $map['DeviceTagFlag'];
        }
        if (isset($map['DeviceTopoLifeCycleFlag'])) {
            $model->deviceTopoLifeCycleFlag = $map['DeviceTopoLifeCycleFlag'];
        }
        if (isset($map['FoundDeviceListFlag'])) {
            $model->foundDeviceListFlag = $map['FoundDeviceListFlag'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['MnsConfiguration'])) {
            $model->mnsConfiguration = $map['MnsConfiguration'];
        }
        if (isset($map['OtaEventFlag'])) {
            $model->otaEventFlag = $map['OtaEventFlag'];
        }
        if (isset($map['OtaJobFlag'])) {
            $model->otaJobFlag = $map['OtaJobFlag'];
        }
        if (isset($map['OtaVersionFlag'])) {
            $model->otaVersionFlag = $map['OtaVersionFlag'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['SubscribeFlags'])) {
            $model->subscribeFlags = $map['SubscribeFlags'];
        }
        if (isset($map['ThingHistoryFlag'])) {
            $model->thingHistoryFlag = $map['ThingHistoryFlag'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
