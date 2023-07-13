<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class CreateDataSourceItemRequest extends Model
{
    /**
     * @example 1002
     *
     * @var int
     */
    public $dataSourceId;

    /**
     * @example device1
     *
     * @var string
     */
    public $deviceName;

    /**
     * @description The instance ID. You can view the instance **ID** on the **Overview** page in the IoT Platform console.
     *
     * For more information, see the [Overview](~~356505~~) topic of IoT instances.
     * @example iot-0pp1n8t***
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @example gy***z
     *
     * @var string
     */
    public $productKey;

    /**
     * @example PRODUCT
     *
     * @var string
     */
    public $scopeType;

    /**
     * @description The topic that you want to add to the data source in the rules engine. Format: `/${productKey}/${deviceName}/topicShortName`. `${productKey}` specifies the **ProductKey** of the product to which a device belongs. `${deviceName}` specifies the name of the device. `topicShortName` specifies the custom name of the topic.
     *
     *   Basic communication topics or Thing Specification Language (TSL) communication topics are in the `/${productKey}/${deviceName}/topicShortName` format. You can replace `${deviceName}` with the plus sign (`+`) wildcard character. The wildcard character specifies that the topic applies to all devices in the product. Valid values of `topicShortName`:
     *
     *   `/thing/event/property/post`: submits the property data of a device.
     *   `/thing/event/${tsl.event.identifier}/post`: submits the event data of a device. `${tsl.event.identifier}` specifies the identifier of an event in the TSL model.
     *   `/thing/lifecycle`: submits device lifecycle changes.
     *   `/thing/downlink/reply/message`: sends a response to a request from IoT Platform.
     *   `/thing/list/found`: submits data when a gateway detects a new sub-device.
     *   `/thing/topo/lifecycle`: submits device topology changes.
     *   `/thing/event/property/history/post`: submits the historical property data of a device.
     *   `/thing/event/${tsl.event.identifier}/post`: submits the historical event data of a device. `${tsl.event.identifier}` specifies the identifier of an event in the TSL model.
     *   `/ota/upgrade`: submits the over-the-air (OTA) update status.
     *   `/ota/version/post`: submits OTA module versions.
     *   `/thing/deviceinfo/update`: submits device tag changes.
     *
     * `/${productKey}/${packageId}/${jobId}/ota/job/status`: submits the status of each OTA update batch. This topic is a basic communication topic. `${packageId}` specifies the ID of the update package. `${jobId}` specifies the ID of the update batch.
     *
     *   Custom topics are in the `/${productKey}/${deviceName}/user/#` format. Example: `/${productKey}/${deviceName}/user/get`.
     *
     * When you specify a custom topic, you can use the plus sign (`+`) and number sign (`#`) wildcard characters.
     *
     *   You can replace `${deviceName}` with the plus sign (`+`) wildcard character. The wildcard character specifies that the topic applies to all devices in the product.
     *   You can replace the fields that follow ${deviceName} with `/user/#`. The number sign (`#`) wildcard character specifies that the topic applies to all fields that follow `/user`.
     *
     *   Topics that are used to submit device status changes are in the `/as/mqtt/status/${productKey}/${deviceName}` format.
     *
     * > You can add only the following topics to the data source in the rules engine for MQTT gateways, devices of MQTT gateways, and products and devices that use the open source MQTT protocol: custom topics, topics that are used to submit device status changes, and topics that are used to submit device lifecycle changes. For more information about custom topics, see the "Messaging" topic. If you set this parameter to a custom topic, you must specify ScopeType and ProductKey. If you set ScopeType to DEVICE, you must specify DeviceName.
     * @example /as/mqtt/status/gy***z/+
     *
     * @var string
     */
    public $topic;
    protected $_name = [
        'dataSourceId'  => 'DataSourceId',
        'deviceName'    => 'DeviceName',
        'iotInstanceId' => 'IotInstanceId',
        'productKey'    => 'ProductKey',
        'scopeType'     => 'ScopeType',
        'topic'         => 'Topic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->scopeType) {
            $res['ScopeType'] = $this->scopeType;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDataSourceItemRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['ScopeType'])) {
            $model->scopeType = $map['ScopeType'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        return $model;
    }
}
