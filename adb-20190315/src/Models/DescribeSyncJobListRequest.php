<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Tea\Model;

class DescribeSyncJobListRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example am-8vb39udfi356l9psq
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @example true
     *
     * @var bool
     */
    public $getSourceDetail;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description This parameter is required.
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
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @example test
     *
     * @var string
     */
    public $sourceDBClusterDescription;

    /**
     * @example pc-t4n766v2llx852n81
     *
     * @var string
     */
    public $sourceDBClusterId;

    /**
     * @example sls
     *
     * @var string
     */
    public $sourceDBType;
    protected $_name = [
        'DBClusterId'                => 'DBClusterId',
        'getSourceDetail'            => 'GetSourceDetail',
        'ownerAccount'               => 'OwnerAccount',
        'ownerId'                    => 'OwnerId',
        'pageNumber'                 => 'PageNumber',
        'pageSize'                   => 'PageSize',
        'regionId'                   => 'RegionId',
        'resourceOwnerAccount'       => 'ResourceOwnerAccount',
        'resourceOwnerId'            => 'ResourceOwnerId',
        'sourceDBClusterDescription' => 'SourceDBClusterDescription',
        'sourceDBClusterId'          => 'SourceDBClusterId',
        'sourceDBType'               => 'SourceDBType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->getSourceDetail) {
            $res['GetSourceDetail'] = $this->getSourceDetail;
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->sourceDBClusterDescription) {
            $res['SourceDBClusterDescription'] = $this->sourceDBClusterDescription;
        }
        if (null !== $this->sourceDBClusterId) {
            $res['SourceDBClusterId'] = $this->sourceDBClusterId;
        }
        if (null !== $this->sourceDBType) {
            $res['SourceDBType'] = $this->sourceDBType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSyncJobListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['GetSourceDetail'])) {
            $model->getSourceDetail = $map['GetSourceDetail'];
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SourceDBClusterDescription'])) {
            $model->sourceDBClusterDescription = $map['SourceDBClusterDescription'];
        }
        if (isset($map['SourceDBClusterId'])) {
            $model->sourceDBClusterId = $map['SourceDBClusterId'];
        }
        if (isset($map['SourceDBType'])) {
            $model->sourceDBType = $map['SourceDBType'];
        }

        return $model;
    }
}
