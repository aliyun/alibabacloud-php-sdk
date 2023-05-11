<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryProductListResponseBody\data\list_;

use AlibabaCloud\Tea\Model;

class productInfo extends Model
{
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
     * @description The data format that was used by a communication protocol to transmit data between the devices and IoT Platform. This parameter is available only if the AliyunCommodityCode parameter is set to iothub_senior.
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
     * @example This is a test product.
     *
     * @var string
     */
    public $description;

    /**
     * @description The number of devices in the product.
     *
     * @example 128
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
     * @description The node type of the product. This parameter is available only if the AliyunCommodityCode parameter is set to iothub_senior. Valid values:
     *
     *   **0**: device. Sub-devices cannot be attached to a device. A device can be directly connected to IoT Platform or connected to IoT Platform as a sub-device of a gateway.
     *   **1**: gateway. Sub-devices can be attached to a gateway. A gateway can manage sub-devices, maintain topological relationships with sub-devices, and synchronize topological relationships to IoT Platform.
     *
     * @example 0
     *
     * @var int
     */
    public $nodeType;

    /**
     * @description The ProductKey of the product. When you create a product, a ProductKey is a globally unique identifier (GUID) that is issued by IoT Platform to the product.
     *
     * @example a1T27vz****
     *
     * @var string
     */
    public $productKey;

    /**
     * @description The name of the service.
     *
     * @var string
     */
    public $productName;
    protected $_name = [
        'authType'    => 'AuthType',
        'dataFormat'  => 'DataFormat',
        'description' => 'Description',
        'deviceCount' => 'DeviceCount',
        'gmtCreate'   => 'GmtCreate',
        'nodeType'    => 'NodeType',
        'productKey'  => 'ProductKey',
        'productName' => 'ProductName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authType) {
            $res['AuthType'] = $this->authType;
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
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return productInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthType'])) {
            $model->authType = $map['AuthType'];
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
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }

        return $model;
    }
}
