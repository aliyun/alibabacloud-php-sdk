<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeTagResourcesRequest\tags;
use AlibabaCloud\Tea\Model;

class DescribeTagResourcesRequest extends Model
{
    /**
     * @description The query token. Set the value to the value of **NextToken** that is returned in the last call.
     *
     * > You do not need to configure this parameter if you call this operation for the first time.
     * @example RGuYpqDdKhzXb8C3.D1BwQgc1tMBsoxdGiEKHHUUCf****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The region ID of the instance. Set the value to **cn-hangzhou**, which indicates an Anti-DDoS Pro instance in the Chinese mainland.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the instance belongs in Resource Management.
     *
     * If you do not configure this parameter, the instance belongs to the default resource group.
     * @example rg-acfm2pz25js****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description An array consisting of IDs of the Anti-DDoS Pro instances that you want to query.
     *
     * @example ddoscoo-cn-mp91j1ao****
     *
     * @var string[]
     */
    public $resourceIds;

    /**
     * @description The type of the resource to which the tag belongs. Set the value to **INSTANCE**, which indicates an Anti-DDoS Pro instance.
     *
     * @example INSTANCE
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description An array consisting of tags that you want to query. Each tag consists of a tag **key** and a tag **value**.
     *
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'nextToken'       => 'NextToken',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceIds'     => 'ResourceIds',
        'resourceType'    => 'ResourceType',
        'tags'            => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceIds) {
            $res['ResourceIds'] = $this->resourceIds;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
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
     * @return DescribeTagResourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceIds'])) {
            if (!empty($map['ResourceIds'])) {
                $model->resourceIds = $map['ResourceIds'];
            }
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
