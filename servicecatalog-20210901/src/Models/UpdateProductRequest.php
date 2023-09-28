<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\Tea\Model;

class UpdateProductRequest extends Model
{
    /**
     * @description 产品描述
     *
     * @var string
     */
    public $description;

    /**
     * @description 代表资源一级ID的资源属性字段
     *
     * @example prod-bp18r7q127****
     *
     * @var string
     */
    public $productId;

    /**
     * @description 代表资源名称的资源属性字段
     *
     * @var string
     */
    public $productName;

    /**
     * @description 产品提供方
     *
     * @var string
     */
    public $providerName;
    protected $_name = [
        'description'  => 'Description',
        'productId'    => 'ProductId',
        'productName'  => 'ProductName',
        'providerName' => 'ProviderName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }
        if (null !== $this->providerName) {
            $res['ProviderName'] = $this->providerName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateProductRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }
        if (isset($map['ProviderName'])) {
            $model->providerName = $map['ProviderName'];
        }

        return $model;
    }
}
