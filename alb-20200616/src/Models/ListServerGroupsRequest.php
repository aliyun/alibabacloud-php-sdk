<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\SDK\Alb\V20200616\Models\ListServerGroupsRequest\tag;
use AlibabaCloud\Tea\Model;

class ListServerGroupsRequest extends Model
{
    /**
     * @description The number of entries to return on each page. Valid values: **1** to **100**. Default value: **20**.
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. Valid values:
     *
     *   You do not need to specify this parameter for the first request.
     *   You must specify the token that is obtained from the previous query as the value of **NextToken**.
     *
     * @example FFmyTO70tTpLG6I3FmYAXG****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the resource group to which the server group belongs.
     *
     * @example rg-atstuj3rtop****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The server group IDs.
     *
     * @var string[]
     */
    public $serverGroupIds;

    /**
     * @description The names of the server groups to be queried. You can specify at most 10 server group names.
     *
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
     * @description The tags that are added to the server group. You can specify up to 10 tags in each call.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The ID of the virtual private cloud (VPC).
     *
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
