<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolDetailResponseBody;

use AlibabaCloud\Tea\Model;

class nodepoolInfo extends Model
{
    /**
     * @description The time when the node pool was created.
     *
     * @example 2020-09-27T19:14:09.156823496+08:00
     *
     * @var string
     */
    public $created;

    /**
     * @description Indicates whether the node pool is a default node pool. A Container Service for Kubernetes (ACK) cluster usually has only one default node pool. Valid values:
     *
     * `false`: The node pool is not a default node pool.
     * @example true
     *
     * @var bool
     */
    public $isDefault;

    /**
     * @description The name of the node pool.
     *
     * The name must be 1 to 63 characters in length, and can contain digits, letters, and hyphens (-). It cannot start with a hyphen (-).
     * @example default-nodepool
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the node pool.
     *
     * @example np615c0e0966124216a0412e10afe0****
     *
     * @var string
     */
    public $nodepoolId;

    /**
     * @description The ID of the region where the node pool is deployed.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the node pool belongs.
     *
     * @example rg-acfmyvw3wjmb****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The type of the node pool.
     *
     * @example ess
     *
     * @var string
     */
    public $type;

    /**
     * @description The time when the node pool was last updated.
     *
     * @example 2020-09-27T20:37:46+08:00
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
