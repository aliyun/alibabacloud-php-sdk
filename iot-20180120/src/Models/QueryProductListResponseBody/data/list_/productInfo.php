<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryProductListResponseBody\data\list_;

use AlibabaCloud\Tea\Model;

class productInfo extends Model
{
    /**
     * @example secret
     *
     * @var string
     */
    public $authType;

    /**
     * @example 1
     *
     * @var int
     */
    public $dataFormat;

    /**
     * @example This is a test product.
     *
     * @var string
     */
    public $description;

    /**
     * @example 128
     *
     * @var int
     */
    public $deviceCount;

    /**
     * @example 1581595942000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example 0
     *
     * @var int
     */
    public $nodeType;

    /**
     * @example a1T27vz****
     *
     * @var string
     */
    public $productKey;

    /**
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
