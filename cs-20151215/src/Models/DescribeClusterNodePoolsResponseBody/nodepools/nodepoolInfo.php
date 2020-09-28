<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolsResponseBody\nodepools;

use AlibabaCloud\Tea\Model;

class nodepoolInfo extends Model
{
    /**
     * @description 节点池创建时间
     *
     * @var string
     */
    public $created;

    /**
     * @description 默认节点池
     *
     * @var bool
     */
    public $isDefault;

    /**
     * @description 节点池名称
     *
     * @var string
     */
    public $name;

    /**
     * @description 节点池ID
     *
     * @var string
     */
    public $nodepoolId;

    /**
     * @description 节点池所在地域ID。
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

    /**
     * @description 节点池类型
     *
     * @var string
     */
    public $type;

    /**
     * @description 节点池更新时间
     *
     * @var string
     */
    public $updated;
    protected $_name = [
        'created'         => 'created',
        'isDefault'       => 'is_default',
        'name'            => 'name',
        'nodepoolId'      => 'nodepool_id',
        'regionId'        => 'region_id',
        'resourceGroupId' => 'resource_group_id',
        'type'            => 'type',
        'updated'         => 'updated',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->created) {
            $res['created'] = $this->created;
        }
        if (null !== $this->isDefault) {
            $res['is_default'] = $this->isDefault;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->nodepoolId) {
            $res['nodepool_id'] = $this->nodepoolId;
        }
        if (null !== $this->regionId) {
            $res['region_id'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['resource_group_id'] = $this->resourceGroupId;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->updated) {
            $res['updated'] = $this->updated;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodepoolInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['created'])) {
            $model->created = $map['created'];
        }
        if (isset($map['is_default'])) {
            $model->isDefault = $map['is_default'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['nodepool_id'])) {
            $model->nodepoolId = $map['nodepool_id'];
        }
        if (isset($map['region_id'])) {
            $model->regionId = $map['region_id'];
        }
        if (isset($map['resource_group_id'])) {
            $model->resourceGroupId = $map['resource_group_id'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['updated'])) {
            $model->updated = $map['updated'];
        }

        return $model;
    }
}
