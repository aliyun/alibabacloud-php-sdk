<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class ListNodeGroupsRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string[]
     */
    public $nodeGroupIds;

    /**
     * @var string[]
     */
    public $nodeGroupNames;

    /**
     * @var string[]
     */
    public $nodeGroupStates;

    /**
     * @var string[]
     */
    public $nodeGroupTypes;

    /**
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
