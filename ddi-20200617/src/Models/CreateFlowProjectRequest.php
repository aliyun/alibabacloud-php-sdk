<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models;

use AlibabaCloud\Tea\Model;

class CreateFlowProjectRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @description 项目描述
     *
     * @var string
     */
    public $description;

    /**
     * @description 项目名称
     *
     * @var string
     */
    public $name;

    /**
     * @description 产品类型，固定值DATABRICKS_DATAINSIGHT
     *
     * @var string
     */
    public $productType;

    /**
     * @description 地域ID
     *
     * @var string
     */
    public $regionId;

    /**
     * @description 资源组ID
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'clientToken'     => 'ClientToken',
        'description'     => 'Description',
        'name'            => 'Name',
        'productType'     => 'ProductType',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFlowProjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
