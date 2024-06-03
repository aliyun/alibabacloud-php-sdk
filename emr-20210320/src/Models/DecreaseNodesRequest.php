<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class DecreaseNodesRequest extends Model
{
    /**
     * @description The cluster ID.
     *
     * This parameter is required.
     * @example c-b933c5aac8fe****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The number of nodes to scale in. The number of nodes to be scaled in. The value should be less than the number of surviving nodes in the current node group.
     *
     * @example 3
     *
     * @var int
     */
    public $decreaseNodeCount;

    /**
     * @description The ID of the node group.
     *
     * This parameter is required.
     * @example ng-869471354ecd****
     *
     * @var string
     */
    public $nodeGroupId;

    /**
     * @description The array of node IDs. Valid values of array element N: 1 to 500.
     *
     * @example ["i-bp1cudc25w2bfwl5****"]
     *
     * @var string[]
     */
    public $nodeIds;

    /**
     * @description The ID of the region in which you want to create the instance.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clusterId'         => 'ClusterId',
        'decreaseNodeCount' => 'DecreaseNodeCount',
        'nodeGroupId'       => 'NodeGroupId',
        'nodeIds'           => 'NodeIds',
        'regionId'          => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->decreaseNodeCount) {
            $res['DecreaseNodeCount'] = $this->decreaseNodeCount;
        }
        if (null !== $this->nodeGroupId) {
            $res['NodeGroupId'] = $this->nodeGroupId;
        }
        if (null !== $this->nodeIds) {
            $res['NodeIds'] = $this->nodeIds;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DecreaseNodesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['DecreaseNodeCount'])) {
            $model->decreaseNodeCount = $map['DecreaseNodeCount'];
        }
        if (isset($map['NodeGroupId'])) {
            $model->nodeGroupId = $map['NodeGroupId'];
        }
        if (isset($map['NodeIds'])) {
            if (!empty($map['NodeIds'])) {
                $model->nodeIds = $map['NodeIds'];
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
