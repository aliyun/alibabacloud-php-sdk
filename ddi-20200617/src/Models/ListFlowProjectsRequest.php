<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models;

use AlibabaCloud\Tea\Model;

class ListFlowProjectsRequest extends Model
{
    /**
     * @description 项目名称，用于过滤项目
     *
     * @var string
     */
    public $name;

    /**
     * @description 页码，用于分页
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description 每页数量
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description 产品类型。固定值DATABIRCKS_DATAINSIGHT
     *
     * @var string
     */
    public $productType;

    /**
     * @description 项目ID。您可以调用ListFlowProjects查看项目的ID
     *
     * @var string
     */
    public $projectId;

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
        'name'            => 'Name',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'productType'     => 'ProductType',
        'projectId'       => 'ProjectId',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
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
     * @return ListFlowProjectsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
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
