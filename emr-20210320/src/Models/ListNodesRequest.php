<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class ListNodesRequest extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * This parameter is required.
     * @example c-b933c5aac8fe****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The number of maximum number of records to obtain at a time. Valid values: 1 to 100.
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description Marks the current position where reading starts. If you set this value to null, you can start from the beginning.
     *
     * @example DD6B1B2A-5837-5237-ABE4-FF0C89568980
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The IDs of node groups.
     *
     * @example DD6B1B2A-5837-5237-ABE4-FF0C89568980
     *
     * @var string[]
     */
    public $nodeGroupIds;

    /**
     * @description An array that consists of information about the ID of the node.
     *
     * @example c-b933c5aac8fe****
     *
     * @var string[]
     */
    public $nodeIds;

    /**
     * @description The names of the nodes.
     *
     * @example 20
     *
     * @var string[]
     */
    public $nodeNames;

    /**
     * @description The status of the node.
     *
     * @example ["CREATED"]
     *
     * @var string[]
     */
    public $nodeStates;

    /**
     * @description The private IP address.
     *
     * @example ["172.12.0.91"]
     *
     * @var string[]
     */
    public $privateIps;

    /**
     * @description The public IP address.
     *
     * @example ["120.13.14.38"]
     *
     * @var string[]
     */
    public $publicIps;

    /**
     * @description The ID of the region in which you want to create the instance.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The list of tags to be bound.
     *
     * @var Tag[]
     */
    public $tags;
    protected $_name = [
        'clusterId'    => 'ClusterId',
        'maxResults'   => 'MaxResults',
        'nextToken'    => 'NextToken',
        'nodeGroupIds' => 'NodeGroupIds',
        'nodeIds'      => 'NodeIds',
        'nodeNames'    => 'NodeNames',
        'nodeStates'   => 'NodeStates',
        'privateIps'   => 'PrivateIps',
        'publicIps'    => 'PublicIps',
        'regionId'     => 'RegionId',
        'tags'         => 'Tags',
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
        if (null !== $this->nodeIds) {
            $res['NodeIds'] = $this->nodeIds;
        }
        if (null !== $this->nodeNames) {
            $res['NodeNames'] = $this->nodeNames;
        }
        if (null !== $this->nodeStates) {
            $res['NodeStates'] = $this->nodeStates;
        }
        if (null !== $this->privateIps) {
            $res['PrivateIps'] = $this->privateIps;
        }
        if (null !== $this->publicIps) {
            $res['PublicIps'] = $this->publicIps;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListNodesRequest
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
        if (isset($map['NodeIds'])) {
            if (!empty($map['NodeIds'])) {
                $model->nodeIds = $map['NodeIds'];
            }
        }
        if (isset($map['NodeNames'])) {
            if (!empty($map['NodeNames'])) {
                $model->nodeNames = $map['NodeNames'];
            }
        }
        if (isset($map['NodeStates'])) {
            if (!empty($map['NodeStates'])) {
                $model->nodeStates = $map['NodeStates'];
            }
        }
        if (isset($map['PrivateIps'])) {
            if (!empty($map['PrivateIps'])) {
                $model->privateIps = $map['PrivateIps'];
            }
        }
        if (isset($map['PublicIps'])) {
            if (!empty($map['PublicIps'])) {
                $model->publicIps = $map['PublicIps'];
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? Tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
