<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Tea\Model;

class UntagResourcesRequest extends Model
{
    /**
     * @description Specifies whether to remove all tags from the resource. This parameter takes effect only when you do not specify `TagKeys` in the request parameters. Valid values:
     *
     *   true
     *   false
     *
     * Default value: false.
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
     * @description The region ID of the resource. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/25609.html) operation to query the most recent region list.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The resource IDs.
     *
     * This parameter is required.
     * @var string[]
     */
    public $resourceIds;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description The resource type. Set the value to scalinggroup.
     *
     * This parameter is required.
     * @example scalinggroup
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The tag keys.
     *
     * @var string[]
     */
    public $tagKeys;
    protected $_name = [
        'all'                  => 'All',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceIds'          => 'ResourceIds',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceType'         => 'ResourceType',
        'tagKeys'              => 'TagKeys',
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
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceIds) {
            $res['ResourceIds'] = $this->resourceIds;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->tagKeys) {
            $res['TagKeys'] = $this->tagKeys;
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
        if (isset($map['ResourceIds'])) {
            if (!empty($map['ResourceIds'])) {
                $model->resourceIds = $map['ResourceIds'];
            }
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['TagKeys'])) {
            if (!empty($map['TagKeys'])) {
                $model->tagKeys = $map['TagKeys'];
            }
        }

        return $model;
    }
}
