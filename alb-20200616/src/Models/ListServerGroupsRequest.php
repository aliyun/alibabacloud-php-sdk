<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\SDK\Alb\V20200616\Models\ListServerGroupsRequest\tag;
use AlibabaCloud\Tea\Model;

class ListServerGroupsRequest extends Model
{
    /**
     * @description 服务器组Id列表
     *
     * @var string[]
     */
    public $serverGroupIds;

    /**
     * @description 服务器组名称
     *
     * @var string[]
     */
    public $serverGroupNames;

    /**
     * @description 资源组ID
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description 分页查询标识
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description 查询数量
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description VpcId
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description Tag列表
     *
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'serverGroupIds'   => 'ServerGroupIds',
        'serverGroupNames' => 'ServerGroupNames',
        'resourceGroupId'  => 'ResourceGroupId',
        'nextToken'        => 'NextToken',
        'maxResults'       => 'MaxResults',
        'vpcId'            => 'VpcId',
        'tag'              => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serverGroupIds) {
            $res['ServerGroupIds'] = $this->serverGroupIds;
        }
        if (null !== $this->serverGroupNames) {
            $res['ServerGroupNames'] = $this->serverGroupNames;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
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

        return $model;
    }
}
