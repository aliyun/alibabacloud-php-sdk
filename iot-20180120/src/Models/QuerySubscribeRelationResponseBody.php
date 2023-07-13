<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class QuerySubscribeRelationResponseBody extends Model
{
    /**
     * @description The error code returned if the call fails. For more information, see [Error codes](~~87387~~).
     *
     * @example iot.system.SystemException
     *
     * @var string
     */
    public $code;

    /**
     * @description The IDs of the consumer groups that are created in the AMQP subscription. This parameter is returned if the **Type** parameter is set to **AMQP**.
     *
     * @var string[]
     */
    public $consumerGroupIds;

    /**
     * @description Indicates whether upstream device messages were pushed.
     *
     *   **true**: yes.
     *   **false**: no.
     *
     * @example true
     *
     * @var bool
     */
    public $deviceDataFlag;

    /**
     * @description Indicates whether messages about device lifecycle changes were pushed.
     *
     *   **true**: yes.
     *   **false**: no.
     *
     * @example true
     *
     * @var bool
     */
    public $deviceLifeCycleFlag;

    /**
     * @description Indicates whether messages about device status changes were pushed.
     *
     *   **true**: yes.
     *   **false**: no.
     *
     * @example true
     *
     * @var bool
     */
    public $deviceStatusChangeFlag;

    /**
     * @description Indicates whether messages about device tag changes were pushed. Valid values:
     *
     *   **true**: yes. This parameter takes effect only if the **Type** parameter is set to **AMQP**.
     *   **false**: no.
     *
     * Default value: **false**.
     * @example true
     *
     * @var bool
     */
    public $deviceTagFlag;

    /**
     * @description Indicates whether messages about topological relationship changes of devices were pushed.
     *
     *   **true**: yes. The value **true** is returned only when you query a gateway product.
     *   **false**: no.
     *
     * @example true
     *
     * @var bool
     */
    public $deviceTopoLifeCycleFlag;

    /**
     * @description The error message returned if the call fails.
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description Indicates whether messages were pushed if a gateway detected new sub-devices.
     *
     *   **true**: yes. The value **true** is returned only when you query a gateway product.
     *   **false**: no.
     *
     * @example true
     *
     * @var bool
     */
    public $foundDeviceListFlag;

    /**
     * @description The configurations of the MNS queue. This parameter is returned if the **Type** parameter is set to **MNS**.
     *
     * For more information, see the "Definition of the MnsConfiguration parameter" section.
     * @example {     "queueName": "mns-test-topic1",     "regionName": "cn-shanghai",     "role": {         "roleArn": "acs:ram::5645***:role/aliyuniotaccessingmnsrole",         "roleName": "AliyunIOTAccessingMNSRole"     } }
     *
     * @var string
     */
    public $mnsConfiguration;

    /**
     * @description Indicates whether notifications about the status of OTA update batches were pushed.
     *
     *   **true**: yes.
     *   **false**: no.
     *
     * @example true
     *
     * @var bool
     */
    public $otaEventFlag;

    /**
     * @description Indicates whether notifications about OTA batch updates were pushed. Valid values:
     *
     *   **true**: yes. This parameter takes effect only if the **Type** parameter is set to **AMQP**.
     *   **false**: no.
     *
     * Default value: **false**.
     * @example true
     *
     * @var bool
     */
    public $otaJobFlag;

    /**
     * @description Indicates whether messages about the version numbers of OTA modules were pushed. Valid values:
     *
     *   **true**: yes. This parameter takes effect only if the **Type** parameter is set to **AMQP**.
     *   **false**: no.
     *
     * Default value: **false**.
     * @example true
     *
     * @var bool
     */
    public $otaVersionFlag;

    /**
     * @description The ProductKey of the product that is specified for the subscription.
     *
     * @example a1fyXVF****
     *
     * @var string
     */
    public $productKey;

    /**
     * @description The ID of the request.
     *
     * @example 21D327AF-A7DE-4E59-B5D1-ACAC8C024555
     *
     * @var string
     */
    public $requestId;

    /**
     * @example {     "jt808DeviceDataFlag": true }
     *
     * @var string
     */
    public $subscribeFlags;

    /**
     * @description Indicates whether the call was successful.
     *
     *   **true**: The call was successful.
     *   **false**: The call failed.
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description Indicates whether upstream historical Thing Specification Language (TSL) data was pushed.
     *
     *   **true**: yes.
     *   **false**: no.
     *
     * @example true
     *
     * @var bool
     */
    public $thingHistoryFlag;

    /**
     * @description The type of the subscription. Valid values:
     *
     *   **MNS**
     *   **AMQP**
     *
     * @example AMQP
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'code'                    => 'Code',
        'consumerGroupIds'        => 'ConsumerGroupIds',
        'deviceDataFlag'          => 'DeviceDataFlag',
        'deviceLifeCycleFlag'     => 'DeviceLifeCycleFlag',
        'deviceStatusChangeFlag'  => 'DeviceStatusChangeFlag',
        'deviceTagFlag'           => 'DeviceTagFlag',
        'deviceTopoLifeCycleFlag' => 'DeviceTopoLifeCycleFlag',
        'errorMessage'            => 'ErrorMessage',
        'foundDeviceListFlag'     => 'FoundDeviceListFlag',
        'mnsConfiguration'        => 'MnsConfiguration',
        'otaEventFlag'            => 'OtaEventFlag',
        'otaJobFlag'              => 'OtaJobFlag',
        'otaVersionFlag'          => 'OtaVersionFlag',
        'productKey'              => 'ProductKey',
        'requestId'               => 'RequestId',
        'subscribeFlags'          => 'SubscribeFlags',
        'success'                 => 'Success',
        'thingHistoryFlag'        => 'ThingHistoryFlag',
        'type'                    => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
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
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->foundDeviceListFlag) {
            $res['FoundDeviceListFlag'] = $this->foundDeviceListFlag;
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->subscribeFlags) {
            $res['SubscribeFlags'] = $this->subscribeFlags;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
     * @return QuerySubscribeRelationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
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
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['FoundDeviceListFlag'])) {
            $model->foundDeviceListFlag = $map['FoundDeviceListFlag'];
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SubscribeFlags'])) {
            $model->subscribeFlags = $map['SubscribeFlags'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
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
