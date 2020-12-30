<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20170601\Models;

use AlibabaCloud\Tea\Model;

class DescribeHiTSDBInstanceListRequest extends Model
{
    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var int
     */
    public $ownerId;

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
    public $ownerAccount;

    /**
     * @var string
     */
    public $appKey;

    /**
     * @var string
     */
    public $queryStr;

    /**
     * @var string
     */
    public $statusList;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $engineType;
    protected $_name = [
        'securityToken'        => 'SecurityToken',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'ownerAccount'         => 'OwnerAccount',
        'appKey'               => 'AppKey',
        'queryStr'             => 'QueryStr',
        'statusList'           => 'StatusList',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'engineType'           => 'EngineType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->queryStr) {
            $res['QueryStr'] = $this->queryStr;
        }
        if (null !== $this->statusList) {
            $res['StatusList'] = $this->statusList;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->engineType) {
            $res['EngineType'] = $this->engineType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHiTSDBInstanceListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['QueryStr'])) {
            $model->queryStr = $map['QueryStr'];
        }
        if (isset($map['StatusList'])) {
            $model->statusList = $map['StatusList'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['EngineType'])) {
            $model->engineType = $map['EngineType'];
        }

        return $model;
    }
}
