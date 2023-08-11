<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ListTagResourcesRequest\tag;
use AlibabaCloud\Tea\Model;

class ListTagResourcesRequest extends Model
{
    /**
     * @description The ID of the resource group to which the Anti-DDoS Origin instance belongs in Resource Management.
     *
     * If you do not specify this parameter, the instance belongs to the default resource group.
     * @example RGuYpqDdKhzXb8C3.D1BwQgc1tMBsoxdGiEKHHUUCf****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The operation that you want to perform. Set the value to **ListTagResources**.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the Anti-DDoS Origin instance.
     *
     * @example rg-acfm2pz25js****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The value of the tag that is added to the instance.
     *
     * @example ddosbgp-cn-v0h1fmwbc024
     *
     * @var string[]
     */
    public $resourceId;

    /**
     * @description The value of the tag to query.
     *
     * >  The **ResourceIds.N** parameter and the key-value pair (Tag.N.Key and Tag.N.Value) cannot be left empty at the same time.
     * @example INSTANCE
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The key of the tag to query.
     *
     * >  The **ResourceIds.N** parameter and the key-value pair (Tag.N.Key and Tag.N.Value) cannot be left empty at the same time.
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'nextToken'       => 'NextToken',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceId'      => 'ResourceId',
        'resourceType'    => 'ResourceType',
        'tag'             => 'Tag',
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
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
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
     * @return ListTagResourcesRequest
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
        if (isset($map['ResourceId'])) {
            if (!empty($map['ResourceId'])) {
                $model->resourceId = $map['ResourceId'];
            }
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
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
