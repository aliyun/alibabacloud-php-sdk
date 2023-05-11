<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class CreateProductRequest extends Model
{
    /**
     * @description The edition of the product.
     *
     *   If you do not configure this parameter, a product of the Basic Edition is automatically created. You cannot use a TSL model to define the product.
     *   If you want to configure this parameter, set the value to **iothub_senior**. A product that supports TSL models is created. You must also configure the **DataFormat** parameter.
     *
     * @example iothub_senior
     *
     * @var string
     */
    public $aliyunCommodityCode;

    /**
     * @description The verification method that is used to connect the devices of the product to IoT Platform.
     *
     * You do not need to configure this parameter. **secret**: uses DeviceSecrets to verify the devices. Default value: secret. For more information, see [MQTT connections over TCP](~~73742~~).
     * @example secret
     *
     * @var string
     */
    public $authType;

    /**
     * @description The identifier of the product category. If you configure this parameter, a TSL model of the product category is used. Otherwise, no TSL model is used.
     *
     * You can call the [ListThingTemplates](~~150316~~) operation to query the details of product categories that are predefined by IoT Platform and obtain category keys.
     * @example Lighting
     *
     * @var string
     */
    public $categoryKey;

    /**
     * @description The data format.
     *
     * If the **AliyunCommodityCode** parameter is set to **iothub_senior**, you must configure this parameter.
     *
     * Valid values:
     *
     *   **0**: custom data format.
     *   **1**: Alink JSON format.
     *
     * @example 1
     *
     * @var int
     */
    public $dataFormat;

    /**
     * @description The description of the product. The description can be up to 100 characters in length.
     *
     * @example Product test
     *
     * @var string
     */
    public $description;

    /**
     * @description You do not need to configure this parameter.
     *
     * @example false
     *
     * @var bool
     */
    public $id2;

    /**
     * @description The ID of the instance. You can view the **ID** of the instance on the **Overview** page in the IoT Platform console.
     *
     *
     **Important**
     *
     *   If your instance has an ID, you must specify the ID for this parameter. Otherwise, the call fails.
     *   If no **Overview** page or ID is generated for your instance, you do not need to configure this parameter.
     *
     * For more information about the instance, see [Overview](~~356505~~).
     * @example iot-***-v64***
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @description You do not need to configure this parameter.
     *
     * @example 8***
     *
     * @var string
     */
    public $joinPermissionId;

    /**
     * @description The network connection method.
     *
     * If the **AliyunCommodityCode** parameter is set to **iothub_senior** and the devices of the product are directly connected devices or gateways, you must configure this parameter.
     *
     * Valid values:
     *
     *   **WIFI**: Wi-Fi.
     *   **CELLULAR**: cellular network.
     *   **ETHERNET**: Ethernet.
     *   **OTHER**: other networks.
     *
     * Default value: WIFI.
     * @example WIFI
     *
     * @var string
     */
    public $netType;

    /**
     * @description The node type of the product. Valid values:
     *
     *   **0**: device. Sub-devices cannot be attached to a device. A device can be directly connected to IoT Platform or connected to IoT Platform as a sub-device of a gateway. If you use the device as a sub-device, you must also configure the **ProtocolType** parameter.
     *   **1**: gateway. Sub-devices can be attached to a gateway. A gateway can manage sub-devices, maintain topological relationships with sub-devices, and synchronize topological relationships to IoT Platform.
     *
     * @example 0
     *
     * @var int
     */
    public $nodeType;

    /**
     * @description The name of the product.
     *
     * The name must be 4 to 30 characters in length, and can contain letters, digits, and underscores (\_).
     *
     *
     **Important** Each product name must be unique within the current instance.
     *
     * @example Light
     *
     * @var string
     */
    public $productName;

    /**
     * @description The protocol used by the devices of the product to connect to the gateway.
     *
     * If the **AliyunCommodityCode** parameter is set to **iothub_senior** and a gateway is required to connect the devices of the product to IoT Platform, you must configure this parameter.
     *
     * Valid values:
     *
     *   **modbus**: Modbus.
     *   **opc-ua**: Open Platform Communication Unified Architecture (OPC UA).
     *   **customize**: custom protocol.
     *   **ble**: Bluetooth Low Energy (BLE).
     *   **zigbee**: ZigBee.
     *
     * @example modbus
     *
     * @var string
     */
    public $protocolType;

    /**
     * @description Specifies whether to publish the TSL model after the product is created.
     *
     *   **true**: publishes the TSL model after the product is created.
     *   **false**: does not publish the TSL model after the product is created.
     *
     * Default value: **true**.
     * @example false
     *
     * @var bool
     */
    public $publishAuto;

    /**
     * @description The ID of the resource group to which the product belongs. If you specify a value for this parameter, the product is added to the resource group.
     *
     * You can log on to the [Resource Management console](https://resourcemanager.console.aliyun.com/resource-groups) to view the ID of the resource group.
     *
     *
     **Important**
     *
     * You can specify a value for this parameter only if you have activated Resource Management.
     * @example rg-acfmxazb4ph***
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The level of data verification. If you do not configure this parameter, the default value is used. Valid values:
     *
     *   **1**: weak verification. Default value: 1. IoT Platform verifies only the identifier and dataType fields of the data. All data is forwarded.
     *
     * In the IoT Platform console, the data is displayed on the **TSL Data** tab of the **Device Details** page. The data that fails to be verified is not displayed.
     *
     * You can view the data that failed to be verified in the **checkFailedData** parameter of the forwarded data. For more information, see [Data formats](~~73736~~).
     *
     *   **2**: no verification. IoT Platform does not verify the data. All data is forwarded.
     *
     * In the IoT Platform console, the data is not displayed on the **TSL Data** tab of the **Device Details** page.
     * @example 1
     *
     * @var int
     */
    public $validateType;
    protected $_name = [
        'aliyunCommodityCode' => 'AliyunCommodityCode',
        'authType'            => 'AuthType',
        'categoryKey'         => 'CategoryKey',
        'dataFormat'          => 'DataFormat',
        'description'         => 'Description',
        'id2'                 => 'Id2',
        'iotInstanceId'       => 'IotInstanceId',
        'joinPermissionId'    => 'JoinPermissionId',
        'netType'             => 'NetType',
        'nodeType'            => 'NodeType',
        'productName'         => 'ProductName',
        'protocolType'        => 'ProtocolType',
        'publishAuto'         => 'PublishAuto',
        'resourceGroupId'     => 'ResourceGroupId',
        'validateType'        => 'ValidateType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunCommodityCode) {
            $res['AliyunCommodityCode'] = $this->aliyunCommodityCode;
        }
        if (null !== $this->authType) {
            $res['AuthType'] = $this->authType;
        }
        if (null !== $this->categoryKey) {
            $res['CategoryKey'] = $this->categoryKey;
        }
        if (null !== $this->dataFormat) {
            $res['DataFormat'] = $this->dataFormat;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->id2) {
            $res['Id2'] = $this->id2;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->joinPermissionId) {
            $res['JoinPermissionId'] = $this->joinPermissionId;
        }
        if (null !== $this->netType) {
            $res['NetType'] = $this->netType;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }
        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }
        if (null !== $this->publishAuto) {
            $res['PublishAuto'] = $this->publishAuto;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->validateType) {
            $res['ValidateType'] = $this->validateType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateProductRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunCommodityCode'])) {
            $model->aliyunCommodityCode = $map['AliyunCommodityCode'];
        }
        if (isset($map['AuthType'])) {
            $model->authType = $map['AuthType'];
        }
        if (isset($map['CategoryKey'])) {
            $model->categoryKey = $map['CategoryKey'];
        }
        if (isset($map['DataFormat'])) {
            $model->dataFormat = $map['DataFormat'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Id2'])) {
            $model->id2 = $map['Id2'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['JoinPermissionId'])) {
            $model->joinPermissionId = $map['JoinPermissionId'];
        }
        if (isset($map['NetType'])) {
            $model->netType = $map['NetType'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }
        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }
        if (isset($map['PublishAuto'])) {
            $model->publishAuto = $map['PublishAuto'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ValidateType'])) {
            $model->validateType = $map['ValidateType'];
        }

        return $model;
    }
}
