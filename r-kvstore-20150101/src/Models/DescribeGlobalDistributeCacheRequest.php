<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Tea\Model;

class DescribeGlobalDistributeCacheRequest extends Model
{
    /**
     * @description The ID of the distributed instance.
     *
     * @example gr-bp14rkqrhac****
     *
     * @var string
     */
    public $globalInstanceId;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The number of the page to return. The value must be an integer that is greater than **0**. Default value: **1**.
     *
     * @example 1
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @description The number of entries to return each page.
     *
     * @example 20
     *
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description The ID of the child instance that is attached to the distributed instance.
     *
     * @example gr-bp1zcjlobkyrq****
     *
     * @var string
     */
    public $subInstanceId;
    protected $_name = [
        'globalInstanceId'     => 'GlobalInstanceId',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'securityToken'        => 'SecurityToken',
        'subInstanceId'        => 'SubInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->globalInstanceId) {
            $res['GlobalInstanceId'] = $this->globalInstanceId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->subInstanceId) {
            $res['SubInstanceId'] = $this->subInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGlobalDistributeCacheRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GlobalInstanceId'])) {
            $model->globalInstanceId = $map['GlobalInstanceId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['SubInstanceId'])) {
            $model->subInstanceId = $map['SubInstanceId'];
        }

        return $model;
    }
}
