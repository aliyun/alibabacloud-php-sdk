<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\CreateProductResponse;

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
     * @var int
     */
    public $nodeType;

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
        Model::validateRequired('aliyunCommodityCode', $this->aliyunCommodityCode, true);
        Model::validateRequired('authType', $this->authType, true);
        Model::validateRequired('dataFormat', $this->dataFormat, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('id2', $this->id2, true);
        Model::validateRequired('nodeType', $this->nodeType, true);
        Model::validateRequired('productKey', $this->productKey, true);
        Model::validateRequired('productName', $this->productName, true);
        Model::validateRequired('productSecret', $this->productSecret, true);
        Model::validateRequired('protocolType', $this->protocolType, true);
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
