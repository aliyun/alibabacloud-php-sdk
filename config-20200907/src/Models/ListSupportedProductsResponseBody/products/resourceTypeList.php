<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListSupportedProductsResponseBody\products;

use AlibabaCloud\Tea\Model;

class resourceTypeList extends Model
{
    /**
     * @description The identifier of the resource type.
     *
     * @example ACS::ECS::Instance
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The English name of the resource type.
     *
     * @example Ecs Instance
     *
     * @var string
     */
    public $typeNameEn;

    /**
     * @description The Chinese name of the resource type.
     *
     * @example ECS实例
     *
     * @var string
     */
    public $typeNameZh;

    /**
     * @description The URL of the resource type in the console.
     *
     * @example https://ecs.console.aliyun.com/#/server/@{ResourceId}/detail?regionId=@{RegionId}
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return resourceTypeList
     */
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
