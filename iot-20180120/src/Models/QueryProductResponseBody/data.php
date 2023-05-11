<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryProductResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The type of the product. This parameter indicates whether a Thing Specification Language (TSL) model was used.
     *
     * Valid values:
     *
     *   **iothub_senior**: A TSL model was used.
     *   **iothub**: No TSL model was used.
     *
     * @example iothub_senior
     *
     * @var string
     */
    public $aliyunCommodityCode;

    /**
     * @description The authentication method that was used to connect the devices of the product to IoT Platform. Valid values:
     *
     *   **secret**: DeviceSecrets were used to authenticate the devices.
     *   **id2**: IoT Internet Device ID was used to authenticate the devices.
     *   **x509**: X.509 certificates were used to authenticate the devices.
     *
     * @example secret
     *
     * @var string
     */
    public $authType;

    /**
     * @description The identifier of the category to which the product belongs.
     *
     * This parameter is available if the AliyunCommodityCode parameter is set to iothub_senior.
     * @example Lighting
     *
     * @var string
     */
    public $categoryKey;

    /**
     * @description The name of the product category.
     *
     * This parameter is available if the AliyunCommodityCode parameter is set to iothub_senior.
     * @var string
     */
    public $categoryName;

    /**
     * @description The data format that was used by a communication protocol to transmit data between the devices and IoT Platform. This parameter is available if the AliyunCommodityCode parameter is set to iothub_senior.
     *
     * Valid values:
     *
     *   **0**: custom. A custom serial data format was used. In this case, the device can submit raw data, such as binary data streams. IoT Platform converts the raw data into standard Alink JSON data by using a specified data parsing script.
     *   **1**: Alink JSON. Alink JSON data is transmitted between the devices and IoT Platform. Alink is a data exchange protocol that is pre-defined by IoT Platform.
     *
     * @example 1
     *
     * @var int
     */
    public $dataFormat;

    /**
     * @description The description of the product.
     *
     * @var string
     */
    public $description;

    /**
     * @description The number of devices under the product.
     *
     * @example 0
     *
     * @var int
     */
    public $deviceCount;

    /**
     * @description The time when the product was created. The value is a timestamp in milliseconds.
     *
     * @example 1581595942000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @description Indicates whether IoT Internet Device ID was enabled. Valid values:
     *
     *   **true**: IoT Internet Device ID was enabled.
     *   **false**: IoT Internet Device ID was disabled.
     *
     * @example false
     *
     * @var bool
     */
    public $id2;

    /**
     * @description The network connection method. Valid values:
     *
     *   **3**: Wi-Fi.
     *   **6**: cellular network (2G/3G/4G/5G).
     *   **7**: Ethernet.
     *   **8**: others.
     *
     * @example 3
     *
     * @var int
     */
    public $netType;

    /**
     * @description The node type of the product. This parameter is available if the AliyunCommodityCode parameter is set to iothub_senior. Valid values:
     *
     *   **0**: device. Sub-devices cannot be attached to a device. A device can connect to IoT Platform directly or as a sub-device of a gateway.
     *   **1**: gateway. Sub-devices can be attached to a gateway. A gateway can manage sub-devices, maintain the topological relationships with sub-devices, and synchronize the topological relationships to IoT Platform.
     *
     * @example 0
     *
     * @var int
     */
    public $nodeType;

    /**
     * @description Indicates whether the operation was called by the owner of the product.
     *
     *   **true**: yes.
     *   **false**: no.
     *
     * @example true
     *
     * @var bool
     */
    public $owner;

    /**
     * @description The ProductKey of the product. When you create a product, a ProductKey is the globally unique identifier (GUID) that is issued by IoT Platform to the product.
     *
     * @example a1T27vz****
     *
     * @var string
     */
    public $productKey;

    /**
     * @description The name of the product.
     *
     * @var string
     */
    public $productName;

    /**
     * @description The ProductSecret of the product.
     *
     * @example U5tW7i44uilc****
     *
     * @var string
     */
    public $productSecret;

    /**
     * @description The status of the product.
     *
     *   **DEVELOPMENT_STATUS**: The product is being developed.
     *   **RELEASE_STATUS**: The product was published.
     *
     * @example DEVELOPMENT_STATUS
     *
     * @var string
     */
    public $productStatus;

    /**
     * @description The type of the protocol that was used by the sub-devices to connect with a gateway.
     *
     * This parameter is available if the AliyunCommodityCode parameter is set to iothub_senior and the NodeType parameter is set to 1. Valid values:
     *
     *   **modbus**: Modbus.
     *   **opc-ua**: OPC UA.
     *   **customize**: custom protocol.
     *   **ble**: BLE.
     *   **zigbee**: ZigBee.
     *
     * @example modbus
     *
     * @var string
     */
    public $protocolType;

    /**
     * @description The level of the data verification. Valid values:
     *
     *   **2**: no verification. IoT Platform does not verify the data. All data is forwarded.
     *
     * In the IoT Platform console, the data is not displayed on the TSL Data tab of the Device Details page.
     *
     *   **1**: low-level verification. IoT Platform verifies only the identifier and dataType fields of the data. All data is forwarded.
     *
     *   **0**: high-level verification. IoT Platform verifies all fields of the data. Only the data that passes the verification is forwarded.
     *
     * After verification, you can view the data that passes or fails the verification.
     *
     *   In the IoT Platform console, the data is displayed on the **TSL Data** tab of the **Device Details** page. The data that fails the verification is not displayed.
     *   You can view the data that fails the verification in the **checkFailedData** parameter of the forwarded data. For more information, see [Data formats](~~73736~~).
     *
     * @example 1
     *
     * @var int
     */
    public $validateType;
    protected $_name = [
        'aliyunCommodityCode' => 'AliyunCommodityCode',
        'authType'            => 'AuthType',
        'categoryKey'         => 'CategoryKey',
        'categoryName'        => 'CategoryName',
        'dataFormat'          => 'DataFormat',
        'description'         => 'Description',
        'deviceCount'         => 'DeviceCount',
        'gmtCreate'           => 'GmtCreate',
        'id2'                 => 'Id2',
        'netType'             => 'NetType',
        'nodeType'            => 'NodeType',
        'owner'               => 'Owner',
        'productKey'          => 'ProductKey',
        'productName'         => 'ProductName',
        'productSecret'       => 'ProductSecret',
        'productStatus'       => 'ProductStatus',
        'protocolType'        => 'ProtocolType',
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
        if (null !== $this->categoryName) {
            $res['CategoryName'] = $this->categoryName;
        }
        if (null !== $this->dataFormat) {
            $res['DataFormat'] = $this->dataFormat;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->deviceCount) {
            $res['DeviceCount'] = $this->deviceCount;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->id2) {
            $res['Id2'] = $this->id2;
        }
        if (null !== $this->netType) {
            $res['NetType'] = $this->netType;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }
        if (null !== $this->productSecret) {
            $res['ProductSecret'] = $this->productSecret;
        }
        if (null !== $this->productStatus) {
            $res['ProductStatus'] = $this->productStatus;
        }
        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }
        if (null !== $this->validateType) {
            $res['ValidateType'] = $this->validateType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
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
        if (isset($map['CategoryName'])) {
            $model->categoryName = $map['CategoryName'];
        }
        if (isset($map['DataFormat'])) {
            $model->dataFormat = $map['DataFormat'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DeviceCount'])) {
            $model->deviceCount = $map['DeviceCount'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['Id2'])) {
            $model->id2 = $map['Id2'];
        }
        if (isset($map['NetType'])) {
            $model->netType = $map['NetType'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }
        if (isset($map['ProductSecret'])) {
            $model->productSecret = $map['ProductSecret'];
        }
        if (isset($map['ProductStatus'])) {
            $model->productStatus = $map['ProductStatus'];
        }
        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }
        if (isset($map['ValidateType'])) {
            $model->validateType = $map['ValidateType'];
        }

        return $model;
    }
}
