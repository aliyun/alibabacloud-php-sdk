<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListSupportedProductsResponseBody\products;

use AlibabaCloud\Dara\Model;

class resourceTypeList extends Model
{
    /**
     * @var string
     */
    public $resourceType;
    /**
     * @var string
     */
    public $typeNameEn;
    /**
     * @var string
     */
    public $typeNameZh;
    /**
     * @var string
     */
    public $typePageLink;
    protected $_name = [
        'resourceType' => 'ResourceType',
        'typeNameEn'   => 'TypeNameEn',
        'typeNameZh'   => 'TypeNameZh',
        'typePageLink' => 'TypePageLink',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->typeNameEn) {
            $res['TypeNameEn'] = $this->typeNameEn;
        }

        if (null !== $this->typeNameZh) {
            $res['TypeNameZh'] = $this->typeNameZh;
        }

        if (null !== $this->typePageLink) {
            $res['TypePageLink'] = $this->typePageLink;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['TypeNameEn'])) {
            $model->typeNameEn = $map['TypeNameEn'];
        }

        if (isset($map['TypeNameZh'])) {
            $model->typeNameZh = $map['TypeNameZh'];
        }

        if (isset($map['TypePageLink'])) {
            $model->typePageLink = $map['TypePageLink'];
        }

        return $model;
    }
}
