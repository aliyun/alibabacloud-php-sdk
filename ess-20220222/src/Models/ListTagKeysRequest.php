<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Tea\Model;

class ListTagKeysRequest extends Model
{
    /**
     * @description The token that determines the start point of the next query. If this parameter is empty, all results are returned.
     *
     * @example caeba0bbb2be03f84eb48b699f0a****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The number of entries to return on each page. Maximum value: 50.
     *
     * Default value: 10.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The region ID of the Auto Scaling resource.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description The type of the Auto Scaling resource. Set the value to scalinggroup. This indicates that the tags are added to scaling groups.
     *
     * @example scalinggroup
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'nextToken'            => 'NextToken',
        'ownerId'              => 'OwnerId',
        'pageSize'             => 'PageSize',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceType'         => 'ResourceType',
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
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTagKeysRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
