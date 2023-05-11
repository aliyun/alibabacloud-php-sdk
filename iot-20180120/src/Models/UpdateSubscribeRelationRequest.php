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
     * @description Specifies whether to push upstream device messages. Valid values:
     *
     *   **true**: yes.
     *   **false**: no.
     *
     * Default value: **false**.
     * @example true
     *
     * @var bool
     */
    public $deviceDataFlag;

    /**
     * @description Specifies whether to push messages about device lifecycle changes. Valid values:
     *
     *   **true**: yes.
     *   **false**: no.
     *
     * Default value: **false**.
     * @example true
     *
     * @var bool
     */
    public $deviceLifeCycleFlag;

    /**
     * @description Specifies whether to push messages about device status changes. Valid values:
     *
     *   **true**: yes.
     *   **false**: no.
     *
     * Default value: **false**.
     * @example true
     *
     * @var bool
     */
    public $deviceStatusChangeFlag;

    /**
     * @description Specifies whether to push messages about topological relationship changes of devices. Valid values:
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
     * @description Specifies whether to push messages about topological relationship changes of devices. Valid values:
     *
     *   **true**: yes. This parameter is valid only for gateway products.
     *   **false**: no.
     *
     * Default value: **false**.
     * @example true
     *
     * @var bool
     */
    public $deviceTopoLifeCycleFlag;

    /**
     * @description Specifies whether to push messages if a gateway detects new sub-devices. Valid values:
     *
     *   **true**: yes. This parameter is valid only for gateway products.
     *   **false**: no.
     *
     * Default value: **false**.
     * @example true
     *
     * @var bool
     */
    public $foundDeviceListFlag;

    /**
     * @description The ID of the instance. You can view the instance **ID** on the **Overview** page in the IoT Platform console.
     *
     * >*   If your instance has an ID, you must configure this parameter. If you do not set this parameter, the call fails.
     * >*   If your instance has no **Overview** page or ID, you do not need to set this parameter.
     *
     * For more information, see [Overview](~~356505~~).
     * @example iot-cn-0pp1n8t****
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @description The configurations of the MNS queue. This parameter is required if the **Type** parameter is set to **AMQP**.
     *
     * For more information, see the "Definition of the MnsConfiguration parameter" section.
     * @example {     "queueName": "mns-test-topic1",     "regionName": "cn-shanghai",     "role": {         "roleArn": "acs:ram::5645***:role/aliyuniotaccessingmnsrole",         "roleName": "AliyunIOTAccessingMNSRole"     } }
     *
     * @var string
     */
    public $mnsConfiguration;

    /**
     * @description Specifies whether to push notifications about the status of OTA update batches. Valid values:
     *
     *   **true**: yes.
     *   **false**: no.
     *
     * Default value: **false**.
     * @example true
     *
     * @var bool
     */
    public $otaEventFlag;

    /**
     * @description Specifies whether to push notifications about the statuses of OTA update batches. Valid values:
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
     * @description Specifies whether to push messages about OTA module version numbers. Valid values:
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
     * @description The **ProductKey** of the product that is specified for the subscription.
     *
     * @example a1fyXVF****
     *
     * @var string
     */
    public $productKey;

    /**
     * @example {     "jt808DeviceDataFlag": true }
     *
     * @var string
     */
    public $subscribeFlags;

    /**
     * @description Specifies whether to push upstream historical Thing Specification Language (TSL) data. Valid values:
     *
     *   **true**: yes.
     *   **false**: no.
     *
     * Default value: **false**.
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
