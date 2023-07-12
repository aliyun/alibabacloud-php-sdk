<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryProductResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
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
     * @var string
     */
    public $categoryName;

    /**
     * @var int
     */
    public $dataFormat;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $deviceCount;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var bool
     */
    public $id2;

    /**
     * @var int
     */
    public $netType;

    /**
     * @var int
     */
    public $nodeType;

    /**
     * @var bool
     */
    public $owner;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var string
     */
    public $productName;

    /**
     * @var string
     */
    public $productSecret;

    /**
     * @var string
     */
    public $productStatus;

    /**
     * @var string
     */
    public $protocolType;

    /**
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
        Model::validateRequired('aliyunCommodityCode', $this->aliyunCommodityCode, true);
        Model::validateRequired('authType', $this->authType, true);
        Model::validateRequired('categoryKey', $this->categoryKey, true);
        Model::validateRequired('categoryName', $this->categoryName, true);
        Model::validateRequired('dataFormat', $this->dataFormat, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('deviceCount', $this->deviceCount, true);
        Model::validateRequired('gmtCreate', $this->gmtCreate, true);
        Model::validateRequired('id2', $this->id2, true);
        Model::validateRequired('netType', $this->netType, true);
        Model::validateRequired('nodeType', $this->nodeType, true);
        Model::validateRequired('owner', $this->owner, true);
        Model::validateRequired('productKey', $this->productKey, true);
        Model::validateRequired('productName', $this->productName, true);
        Model::validateRequired('productSecret', $this->productSecret, true);
        Model::validateRequired('productStatus', $this->productStatus, true);
        Model::validateRequired('protocolType', $this->protocolType, true);
        Model::validateRequired('validateType', $this->validateType, true);
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
