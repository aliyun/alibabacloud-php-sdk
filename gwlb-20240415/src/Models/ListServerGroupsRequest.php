<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gwlb\V20240415\Models;

use AlibabaCloud\SDK\Gwlb\V20240415\Models\ListServerGroupsRequest\tag;
use AlibabaCloud\Tea\Model;

class ListServerGroupsRequest extends Model
{
    /**
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example FFmyTO70tTpLG6I3FmYAXGKPd****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example rg-atstuj3rtop****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string[]
     */
    public $serverGroupIds;

    /**
     * @var string[]
     */
    public $serverGroupNames;

    /**
     * @example Instance
     *
     * @var string
     */
    public $serverGroupType;

    /**
     * @example 1
     *
     * @var int
     */
    public $skip;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @example vpc-bp15zckdt37pq72zv****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'maxResults'       => 'MaxResults',
        'nextToken'        => 'NextToken',
        'resourceGroupId'  => 'ResourceGroupId',
        'serverGroupIds'   => 'ServerGroupIds',
        'serverGroupNames' => 'ServerGroupNames',
        'serverGroupType'  => 'ServerGroupType',
        'skip'             => 'Skip',
        'tag'              => 'Tag',
        'vpcId'            => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->serverGroupIds) {
            $res['ServerGroupIds'] = $this->serverGroupIds;
        }
        if (null !== $this->serverGroupNames) {
            $res['ServerGroupNames'] = $this->serverGroupNames;
        }
        if (null !== $this->serverGroupType) {
            $res['ServerGroupType'] = $this->serverGroupType;
        }
        if (null !== $this->skip) {
            $res['Skip'] = $this->skip;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListServerGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ServerGroupIds'])) {
            if (!empty($map['ServerGroupIds'])) {
                $model->serverGroupIds = $map['ServerGroupIds'];
            }
        }
        if (isset($map['ServerGroupNames'])) {
            if (!empty($map['ServerGroupNames'])) {
                $model->serverGroupNames = $map['ServerGroupNames'];
            }
        }
        if (isset($map['ServerGroupType'])) {
            $model->serverGroupType = $map['ServerGroupType'];
        }
        if (isset($map['Skip'])) {
            $model->skip = $map['Skip'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
