<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\CreateProductResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The type of the product.
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
     * @description The authentication method that is used to connect the devices of the product to IoT Platform. Valid values:
     *
     *   **secret**: uses DeviceSecrets to verify the devices.
     *   **id2**: uses IoT Internet Device ID to verify the devices.
     *   **x509**: uses X.509 certificates to verify the devices.
     *
     * @example secret
     *
     * @var string
     */
    public $authType;

    /**
     * @description The data format.
     *
     *   **0**: custom data format.
     *   **1**: Alink JSON format.
     *
     * >  This parameter is returned only if the AliyunCommodityCode parameter is set to iothub_senior.
     * @example 1
     *
     * @var int
     */
    public $dataFormat;

    /**
     * @description The description of the product.
     *
     * @example Product test
     *
     * @var string
     */
    public $description;

    /**
     * @description Indicates whether IoT Internet Device ID was enabled.
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
     * @description The node type of the product. Valid values:
     *
     *   **0**: device. Sub-devices cannot be attached to a device. A device can be directly connected to IoT Platform or connected to IoT Platform as a sub-device of a gateway.
     *   **1**: gateway. Sub-devices can be attached to a gateway. A gateway can manage sub-devices, maintain topological relationships with sub-devices, and synchronize topological relationships to IoT Platform.
     *
     * >  This parameter is available only if the AliyunCommodityCode parameter is set to iothub_senior.
     * @example 0
     *
     * @var int
     */
    public $nodeType;

    /**
     * @description The ProductKey of the product. A ProductKey is a globally unique identifier (GUID) issued by IoT Platform to a new product.
     *
     * >  Secure the **ProductKey** of the product. The ProductKey is required when you perform specific operations.
     * @example a1FlqIQ****
     *
     * @var string
     */
    public $productKey;

    /**
     * @description The name of the product.
     *
     * @example Test
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
     * @description The protocol used by the devices of the product to connect to the gateway.
     *
     * >  This parameter is available only if the AliyunCommodityCode parameter is set to iothub_senior.
     * @example modbus
     *
     * @var string
     */
    public $protocolType;
    protected $_name = [
        'aliyunCommodityCode' => 'AliyunCommodityCode',
        'authType'            => 'AuthType',
        'dataFormat'          => 'DataFormat',
        'description'         => 'Description',
        'id2'                 => 'Id2',
        'nodeType'            => 'NodeType',
        'productKey'          => 'ProductKey',
        'productName'         => 'ProductName',
        'productSecret'       => 'ProductSecret',
        'protocolType'        => 'ProtocolType',
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
        if (null !== $this->dataFormat) {
            $res['DataFormat'] = $this->dataFormat;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->id2) {
            $res['Id2'] = $this->id2;
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
        if (null !== $this->productSecret) {
            $res['ProductSecret'] = $this->productSecret;
        }
        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
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
        if (isset($map['DataFormat'])) {
            $model->dataFormat = $map['DataFormat'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Id2'])) {
            $model->id2 = $map['Id2'];
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
        if (isset($map['ProductSecret'])) {
            $model->productSecret = $map['ProductSecret'];
        }
        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }

        return $model;
    }
}
