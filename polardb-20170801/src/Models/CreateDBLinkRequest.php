<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class CreateDBLinkRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the value, but you must make sure that it is unique among different requests. The token can only contain ASCII characters and cannot exceed 64 characters in length. The token is case-sensitive.
     *
     * @example 6000170000591aed949d0f54a343f1a4233c1e7d1c5c******
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The ID of the source cluster that the database link connects.
     *
     * >  You can call the [DescribeDBClusters](~~173433~~) operation to query PolarDB clusters.
     * @example pc-a************
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The name of the database link.
     *
     *   The name must contain lowercase letters and can also contain digits and underscores (\_).
     *   The name must start with a letter and end with a letter or digit.
     *   The name must be 1 to 64 characters in length.
     *
     * @example dblink_test
     *
     * @var string
     */
    public $DBLinkName;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the region.
     *
     * >  You can call the [DescribeRegions](~~98041~~) operation to query information about regions.
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
     * @description The name of the source database.
     *
     * >  You can call the [DescribeDatabases](~~173558~~) operation to query information about databases in a PolarDB cluster.
     * @example testdb1
     *
     * @var string
     */
    public $sourceDBName;

    /**
     * @description The account of the destination database.
     *
     * >  You can call the [DescribeAccounts](~~173549~~) operation to query the account of a PolarDB cluster.
     * @example testacc
     *
     * @var string
     */
    public $targetDBAccount;

    /**
     * @description The ID of the destination cluster that the database link connects.
     *
     * > *   If the destination cluster is a user-created Oracle database on an ECS instance, set the value to `null`.
     * > *   You can call the [DescribeDBClusters](~~173433~~) operation to query PolarDB clusters.
     * @example pc-b************
     *
     * @var string
     */
    public $targetDBInstanceName;

    /**
     * @description The name of the destination database.
     *
     * >  You can call the [DescribeDatabases](~~173558~~) operation to query information about databases in a PolarDB cluster.
     * @example testdb2
     *
     * @var string
     */
    public $targetDBName;

    /**
     * @description The account password of the destination database.
     *
     * @example Test1111
     *
     * @var string
     */
    public $targetDBPasswd;

    /**
     * @description The IP address of the user-created Oracle database on an ECS instance.
     *
     * @example 192.**.**.46
     *
     * @var string
     */
    public $targetIp;

    /**
     * @description The port number of the user-created Oracle database on an ECS instance.
     *
     * @example 1521
     *
     * @var string
     */
    public $targetPort;

    /**
     * @description The ID of the virtual private cloud (VPC).
     *
     * >  You can call the [DescribeVpcs](~~35739~~) operation to query information about VPCs.
     * @example vpc-bp1qpo0kug3a20qqe****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'clientToken'          => 'ClientToken',
        'DBClusterId'          => 'DBClusterId',
        'DBLinkName'           => 'DBLinkName',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'sourceDBName'         => 'SourceDBName',
        'targetDBAccount'      => 'TargetDBAccount',
        'targetDBInstanceName' => 'TargetDBInstanceName',
        'targetDBName'         => 'TargetDBName',
        'targetDBPasswd'       => 'TargetDBPasswd',
        'targetIp'             => 'TargetIp',
        'targetPort'           => 'TargetPort',
        'vpcId'                => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->DBLinkName) {
            $res['DBLinkName'] = $this->DBLinkName;
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
        if (null !== $this->sourceDBName) {
            $res['SourceDBName'] = $this->sourceDBName;
        }
        if (null !== $this->targetDBAccount) {
            $res['TargetDBAccount'] = $this->targetDBAccount;
        }
        if (null !== $this->targetDBInstanceName) {
            $res['TargetDBInstanceName'] = $this->targetDBInstanceName;
        }
        if (null !== $this->targetDBName) {
            $res['TargetDBName'] = $this->targetDBName;
        }
        if (null !== $this->targetDBPasswd) {
            $res['TargetDBPasswd'] = $this->targetDBPasswd;
        }
        if (null !== $this->targetIp) {
            $res['TargetIp'] = $this->targetIp;
        }
        if (null !== $this->targetPort) {
            $res['TargetPort'] = $this->targetPort;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDBLinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['DBLinkName'])) {
            $model->DBLinkName = $map['DBLinkName'];
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
        if (isset($map['SourceDBName'])) {
            $model->sourceDBName = $map['SourceDBName'];
        }
        if (isset($map['TargetDBAccount'])) {
            $model->targetDBAccount = $map['TargetDBAccount'];
        }
        if (isset($map['TargetDBInstanceName'])) {
            $model->targetDBInstanceName = $map['TargetDBInstanceName'];
        }
        if (isset($map['TargetDBName'])) {
            $model->targetDBName = $map['TargetDBName'];
        }
        if (isset($map['TargetDBPasswd'])) {
            $model->targetDBPasswd = $map['TargetDBPasswd'];
        }
        if (isset($map['TargetIp'])) {
            $model->targetIp = $map['TargetIp'];
        }
        if (isset($map['TargetPort'])) {
            $model->targetPort = $map['TargetPort'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
