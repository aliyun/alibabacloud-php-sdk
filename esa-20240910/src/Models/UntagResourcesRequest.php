<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class UntagResourcesRequest extends Model
{
    /**
     * @description Specifies whether to remove all tags. Valid values:
     *
     *   **true**
     *   **false**
     *
     * Default value: **false**.
     *
     * @example false
     *
     * @var bool
     */
    public $all;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the region where the resources reside. Set the value to **cn-hangzhou**.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of resource N. Valid values of N: **1** to **50**.
     *
     * This parameter is required.
     *
     * @var string[]
     */
    public $resourceId;

    /**
     * @description The resource type.
     *
     * This parameter is required.
     *
     * @example site
     *
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description The key of tag N to remove from the resource. Valid values of N: **1** to **20**.
     *
     * @var string[]
     */
    public $tagKey;
    protected $_name = [
        'all' => 'All',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'resourceId' => 'ResourceId',
        'resourceType' => 'ResourceType',
        'securityToken' => 'SecurityToken',
        'tagKey' => 'TagKey',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->all) {
            $res['All'] = $this->all;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
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
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceId'])) {
            if (!empty($map['ResourceId'])) {
                $model->resourceId = $map['ResourceId'];
            }
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['TagKey'])) {
            if (!empty($map['TagKey'])) {
                $model->tagKey = $map['TagKey'];
            }
        }

        return $model;
    }
}
