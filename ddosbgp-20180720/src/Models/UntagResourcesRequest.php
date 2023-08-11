<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\Tea\Model;

class UntagResourcesRequest extends Model
{
    /**
     * @description The operation that you want to perform. Set the value to **UntagResources**.
     *
     * @example false
     *
     * @var bool
     */
    public $all;

    /**
     * @description testKey1
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The type of the specified resource. Set the value to **INSTANCE**.
     *
     * @example test
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example ddosbgp-cn-v0h1fmwbc024
     *
     * @var string[]
     */
    public $resourceId;

    /**
     * @description The ID of the request.
     *
     * @example INSTANCE
     *
     * @var string
     */
    public $resourceType;

    /**
     * @example testKey1
     *
     * @var string[]
     */
    public $tagKey;
    protected $_name = [
        'all'             => 'All',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceId'      => 'ResourceId',
        'resourceType'    => 'ResourceType',
        'tagKey'          => 'TagKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->all) {
            $res['All'] = $this->all;
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
        if (null !== $this->tagKey) {
            $res['TagKey'] = $this->tagKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UntagResourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['All'])) {
            $model->all = $map['All'];
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
        if (isset($map['TagKey'])) {
            if (!empty($map['TagKey'])) {
                $model->tagKey = $map['TagKey'];
            }
        }

        return $model;
    }
}
