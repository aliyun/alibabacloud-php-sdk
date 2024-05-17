<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class EvaluateRegionResourceRequest extends Model
{
    /**
     * @description The cluster link type. The backend randomly selects the default value. Valid values:
     *
     *   **lvs** :Linux virtual server
     *   **proxy**: proxy server
     *   **dns**: domain name system
     *
     * @example lvs
     *
     * @var string
     */
    public $DBInstanceConnType;

    /**
     * @description The specifications of the node. For information about node specifications, see the following topics:
     *
     *   PolarDB for MySQL: [Specifications of compute nodes](https://help.aliyun.com/document_detail/102542.html)
     *   PolarDB for Oracle: [Specifications of compute nodes](https://help.aliyun.com/document_detail/207921.html)
     *   PolarDB for PostgreSQL: [Specifications of compute nodes](https://help.aliyun.com/document_detail/209380.html)
     *
     * This parameter is required.
     * @example polar.mysql.x4.large
     *
     * @var string
     */
    public $DBNodeClass;

    /**
     * @description The type of the database engine. Valid values:
     *
     *   **MySQL**
     *   **PostgreSQL**
     *   **Oracle**
     *
     * This parameter is required.
     * @example MySQL
     *
     * @var string
     */
    public $DBType;

    /**
     * @description The version of the database engine
     *
     *   Valid values for the MySQL database engine:
     *
     *   **5.6**
     *   **5.7**
     *   **8.0**
     *
     *   Valid values for the PostgreSQL database engine:
     *
     *   **11**
     *   **14**
     *
     *   Valid value for the Oracle database engine: **11**
     *
     * This parameter is required.
     * @example 8.0
     *
     * @var string
     */
    public $DBVersion;

    /**
     * @description Specifies whether to return the zones in which the single-zone deployment method is supported. Default value: 0. Valid values:
     *
     *   **0**: no value returned
     *   **1**: returns the zones.
     *
     * @example 1
     *
     * @var string
     */
    public $dispenseMode;

    /**
     * @description Specifies whether Maxscale is created. Default value: true. Valid values:
     *
     *   **true**
     *   **false**
     *
     * This parameter is required.
     * @example true
     *
     * @var string
     */
    public $needMaxScaleLink;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-************
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The subdomain. It is the child domain of the top-level domain name or parent domain. For example, if the parent domain name is cn-beijing, its child domain can be cn-beijing-i-aliyun.
     *
     * @example cn-beijing-i-aliyun
     *
     * @var string
     */
    public $subDomain;

    /**
     * @description The zone ID.
     *
     * This parameter is required.
     * @example cn-hangzhou-g
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'DBInstanceConnType'   => 'DBInstanceConnType',
        'DBNodeClass'          => 'DBNodeClass',
        'DBType'               => 'DBType',
        'DBVersion'            => 'DBVersion',
        'dispenseMode'         => 'DispenseMode',
        'needMaxScaleLink'     => 'NeedMaxScaleLink',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'subDomain'            => 'SubDomain',
        'zoneId'               => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceConnType) {
            $res['DBInstanceConnType'] = $this->DBInstanceConnType;
        }
        if (null !== $this->DBNodeClass) {
            $res['DBNodeClass'] = $this->DBNodeClass;
        }
        if (null !== $this->DBType) {
            $res['DBType'] = $this->DBType;
        }
        if (null !== $this->DBVersion) {
            $res['DBVersion'] = $this->DBVersion;
        }
        if (null !== $this->dispenseMode) {
            $res['DispenseMode'] = $this->dispenseMode;
        }
        if (null !== $this->needMaxScaleLink) {
            $res['NeedMaxScaleLink'] = $this->needMaxScaleLink;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->subDomain) {
            $res['SubDomain'] = $this->subDomain;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EvaluateRegionResourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceConnType'])) {
            $model->DBInstanceConnType = $map['DBInstanceConnType'];
        }
        if (isset($map['DBNodeClass'])) {
            $model->DBNodeClass = $map['DBNodeClass'];
        }
        if (isset($map['DBType'])) {
            $model->DBType = $map['DBType'];
        }
        if (isset($map['DBVersion'])) {
            $model->DBVersion = $map['DBVersion'];
        }
        if (isset($map['DispenseMode'])) {
            $model->dispenseMode = $map['DispenseMode'];
        }
        if (isset($map['NeedMaxScaleLink'])) {
            $model->needMaxScaleLink = $map['NeedMaxScaleLink'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SubDomain'])) {
            $model->subDomain = $map['SubDomain'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
