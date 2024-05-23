<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeHostWebShellRequest extends Model
{
    /**
     * @description The username of the account that is used to log on to the host of the instance.
     *
     * This parameter is required.
     * @example testOsAccount1
     *
     * @var string
     */
    public $accountName;

    /**
     * @description The password of the host account.
     *
     * This parameter is required.
     * @example ***
     *
     * @var string
     */
    public $accountPassword;

    /**
     * @description The instance ID.
     *
     * This parameter is required.
     * @example rm-uf6wjk5xxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The instance hostname. You can call the DescribeDBInstanceIpHostname operation to query the hostname.
     *
     * This parameter is required.
     * @example testHost1
     *
     * @var string
     */
    public $hostName;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID of the instance. You can call the DescribeDBInstanceAttribute operation to query the region ID.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionID;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'accountName'          => 'AccountName',
        'accountPassword'      => 'AccountPassword',
        'DBInstanceId'         => 'DBInstanceId',
        'hostName'             => 'HostName',
        'ownerId'              => 'OwnerId',
        'regionID'             => 'RegionID',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->accountPassword) {
            $res['AccountPassword'] = $this->accountPassword;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionID) {
            $res['RegionID'] = $this->regionID;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHostWebShellRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['AccountPassword'])) {
            $model->accountPassword = $map['AccountPassword'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionID'])) {
            $model->regionID = $map['RegionID'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
