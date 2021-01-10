<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class CreateProductRequest extends Model
{
    /**
     * @var string
     */
    public $apiProduct;

    /**
     * @var string
     */
    public $apiRevision;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $productName;

    /**
     * @var int
     */
    public $nodeType;

    /**
     * @var int
     */
    public $dataFormat;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $aliyunCommodityCode;

    /**
     * @var bool
     */
    public $id2;

    /**
     * @var int
     */
    public $categoryId;

    /**
     * @var string
     */
    public $protocolType;

    /**
     * @var string
     */
    public $netType;

    /**
     * @var string
     */
    public $joinPermissionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $authType;

    /**
     * @var string
     */
    public $categoryKey;

    /**
     * @var bool
     */
    public $publishAuto;

    /**
     * @var int
     */
    public $validateType;

    /**
     * @var string
     */
    public $realTenantId;

    /**
     * @var string
     */
    public $realTripartiteKey;
    protected $_name = [
        'apiProduct'          => 'ApiProduct',
        'apiRevision'         => 'ApiRevision',
        'iotInstanceId'       => 'IotInstanceId',
        'productName'         => 'ProductName',
        'nodeType'            => 'NodeType',
        'dataFormat'          => 'DataFormat',
        'description'         => 'Description',
        'aliyunCommodityCode' => 'AliyunCommodityCode',
        'id2'                 => 'Id2',
        'categoryId'          => 'CategoryId',
        'protocolType'        => 'ProtocolType',
        'netType'             => 'NetType',
        'joinPermissionId'    => 'JoinPermissionId',
        'resourceGroupId'     => 'ResourceGroupId',
        'authType'            => 'AuthType',
        'categoryKey'         => 'CategoryKey',
        'publishAuto'         => 'PublishAuto',
        'validateType'        => 'ValidateType',
        'realTenantId'        => 'RealTenantId',
        'realTripartiteKey'   => 'RealTripartiteKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiProduct) {
            $res['ApiProduct'] = $this->apiProduct;
        }
        if (null !== $this->apiRevision) {
            $res['ApiRevision'] = $this->apiRevision;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }
        if (null !== $this->dataFormat) {
            $res['DataFormat'] = $this->dataFormat;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->aliyunCommodityCode) {
            $res['AliyunCommodityCode'] = $this->aliyunCommodityCode;
        }
        if (null !== $this->id2) {
            $res['Id2'] = $this->id2;
        }
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }
        if (null !== $this->netType) {
            $res['NetType'] = $this->netType;
        }
        if (null !== $this->joinPermissionId) {
            $res['JoinPermissionId'] = $this->joinPermissionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->authType) {
            $res['AuthType'] = $this->authType;
        }
        if (null !== $this->categoryKey) {
            $res['CategoryKey'] = $this->categoryKey;
        }
        if (null !== $this->publishAuto) {
            $res['PublishAuto'] = $this->publishAuto;
        }
        if (null !== $this->validateType) {
            $res['ValidateType'] = $this->validateType;
        }
        if (null !== $this->realTenantId) {
            $res['RealTenantId'] = $this->realTenantId;
        }
        if (null !== $this->realTripartiteKey) {
            $res['RealTripartiteKey'] = $this->realTripartiteKey;
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
        if (isset($map['ApiProduct'])) {
            $model->apiProduct = $map['ApiProduct'];
        }
        if (isset($map['ApiRevision'])) {
            $model->apiRevision = $map['ApiRevision'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }
        if (isset($map['DataFormat'])) {
            $model->dataFormat = $map['DataFormat'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['AliyunCommodityCode'])) {
            $model->aliyunCommodityCode = $map['AliyunCommodityCode'];
        }
        if (isset($map['Id2'])) {
            $model->id2 = $map['Id2'];
        }
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }
        if (isset($map['NetType'])) {
            $model->netType = $map['NetType'];
        }
        if (isset($map['JoinPermissionId'])) {
            $model->joinPermissionId = $map['JoinPermissionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['AuthType'])) {
            $model->authType = $map['AuthType'];
        }
        if (isset($map['CategoryKey'])) {
            $model->categoryKey = $map['CategoryKey'];
        }
        if (isset($map['PublishAuto'])) {
            $model->publishAuto = $map['PublishAuto'];
        }
        if (isset($map['ValidateType'])) {
            $model->validateType = $map['ValidateType'];
        }
        if (isset($map['RealTenantId'])) {
            $model->realTenantId = $map['RealTenantId'];
        }
        if (isset($map['RealTripartiteKey'])) {
            $model->realTripartiteKey = $map['RealTripartiteKey'];
        }

        return $model;
    }
}
