<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterNodePoolRequest;

use AlibabaCloud\Tea\Model;

class nodepoolInfo extends Model
{
    /**
     * @description The name of the node pool.
     *
     * This parameter is required.
     * @example cluster-demo
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the resource group to which the node pool belongs. Instances that are added to the node pool belong to this resource group.
     *
     * @example rg-acfmyvw3wjmb****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The type of node pool. Valid values:
     *
     *   `ess`: regular node pool, which supports the managed node pool feature and the auto scaling feature.
     *   `edge`: edge node pool.
     *   `lingjun`: Lingjun node pool.
     *
     * @example ess
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'name'            => 'name',
        'resourceGroupId' => 'resource_group_id',
        'type'            => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->resourceGroupId) {
            $res['resource_group_id'] = $this->resourceGroupId;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['resource_group_id'])) {
            $model->resourceGroupId = $map['resource_group_id'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
