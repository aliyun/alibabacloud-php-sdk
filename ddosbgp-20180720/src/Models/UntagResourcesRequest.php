<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\Tea\Model;

class UntagResourcesRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $tagOwnerUid;

    /**
     * @var string
     */
    public $tagOwnerBid;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var bool
     */
    public $all;

    /**
     * @var string[]
     */
    public $resourceId;

    /**
     * @var string[]
     */
    public $tagKey;
    protected $_name = [
        'sourceIp'        => 'SourceIp',
        'resourceGroupId' => 'ResourceGroupId',
        'regionId'        => 'RegionId',
        'tagOwnerUid'     => 'TagOwnerUid',
        'tagOwnerBid'     => 'TagOwnerBid',
        'resourceType'    => 'ResourceType',
        'all'             => 'All',
        'resourceId'      => 'ResourceId',
        'tagKey'          => 'TagKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->tagOwnerUid) {
            $res['TagOwnerUid'] = $this->tagOwnerUid;
        }
        if (null !== $this->tagOwnerBid) {
            $res['TagOwnerBid'] = $this->tagOwnerBid;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->all) {
            $res['All'] = $this->all;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
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
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TagOwnerUid'])) {
            $model->tagOwnerUid = $map['TagOwnerUid'];
        }
        if (isset($map['TagOwnerBid'])) {
            $model->tagOwnerBid = $map['TagOwnerBid'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['All'])) {
            $model->all = $map['All'];
        }
        if (isset($map['ResourceId'])) {
            if (!empty($map['ResourceId'])) {
                $model->resourceId = $map['ResourceId'];
            }
        }
        if (isset($map['TagKey'])) {
            if (!empty($map['TagKey'])) {
                $model->tagKey = $map['TagKey'];
            }
        }

        return $model;
    }
}
