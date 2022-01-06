<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class CreateProductRequest extends Model
{
    /**
     * @var string
     */
    public $aliyunCommodityCode;

    /**
     * @var string
     */
    public $authType;

    /**
     * @var string
     */
    public $categoryKey;

    /**
     * @var int
     */
    public $dataFormat;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $id2;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $joinPermissionId;

    /**
     * @var string
     */
    public $netType;

    /**
     * @var int
     */
    public $nodeType;

    /**
     * @var string
     */
    public $productName;

    /**
     * @var string
     */
    public $protocolType;

    /**
     * @var bool
     */
    public $publishAuto;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
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
