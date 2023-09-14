<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class ListNodeGroupsRequest extends Model
{
    /**
     * @description 集群ID。
     *
     * @example c-b933c5aac8fe****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description 一次获取的最大记录数。取值范围：1~100。
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description 标记当前开始读取的位置，置空表示从头开始。
     *
     * @example DD6B1B2A-5837-5237-ABE4-FF0C89568980
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description 节点组ID列表。
     *
     * @example c-b933c5aac8fe****
     *
     * @var string[]
     */
    public $nodeGroupIds;

    /**
     * @description 节点组名称列表。
     *
     * @example DD6B1B2A-5837-5237-ABE4-FF0C89568980
     *
     * @var string[]
     */
    public $nodeGroupNames;

    /**
     * @description 节点组状态。
     *
     * @example ["CORE"]
     *
     * @var string[]
     */
    public $nodeGroupStates;

    /**
     * @description 节点组类型列表。
     *
     * @example 20
     *
     * @var string[]
     */
    public $nodeGroupTypes;

    /**
     * @description 区域ID。
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clusterId'       => 'ClusterId',
        'maxResults'      => 'MaxResults',
        'nextToken'       => 'NextToken',
        'nodeGroupIds'    => 'NodeGroupIds',
        'nodeGroupNames'  => 'NodeGroupNames',
        'nodeGroupStates' => 'NodeGroupStates',
        'nodeGroupTypes'  => 'NodeGroupTypes',
        'regionId'        => 'RegionId',
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
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->nodeGroupIds) {
            $res['NodeGroupIds'] = $this->nodeGroupIds;
        }
        if (null !== $this->nodeGroupNames) {
            $res['NodeGroupNames'] = $this->nodeGroupNames;
        }
        if (null !== $this->nodeGroupStates) {
            $res['NodeGroupStates'] = $this->nodeGroupStates;
        }
        if (null !== $this->nodeGroupTypes) {
            $res['NodeGroupTypes'] = $this->nodeGroupTypes;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListNodeGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['NodeGroupIds'])) {
            if (!empty($map['NodeGroupIds'])) {
                $model->nodeGroupIds = $map['NodeGroupIds'];
            }
        }
        if (isset($map['NodeGroupNames'])) {
            if (!empty($map['NodeGroupNames'])) {
                $model->nodeGroupNames = $map['NodeGroupNames'];
            }
        }
        if (isset($map['NodeGroupStates'])) {
            if (!empty($map['NodeGroupStates'])) {
                $model->nodeGroupStates = $map['NodeGroupStates'];
            }
        }
        if (isset($map['NodeGroupTypes'])) {
            if (!empty($map['NodeGroupTypes'])) {
                $model->nodeGroupTypes = $map['NodeGroupTypes'];
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
