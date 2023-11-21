<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models;

use AlibabaCloud\Tea\Model;

class CreateDedicatedHostAccountRequest extends Model
{
    /**
     * @description The name of the host account.
     *
     *   The name must be 2 to 16 characters in length.
     *   The name must start with a lowercase letter and end with a lowercase letter or a digit.
     *   The name can contain lowercase letters, digits, and underscores (\_).
     *
     * @example test
     *
     * @var string
     */
    public $accountName;

    /**
     * @description The password of the host account.
     *
     *   The password must be 6 to 32 characters in length.
     *   The password must contain three of the following character types: upper letters, lower letters, digits, and special characters.
     *   The password can contain the following special characters: `! @ # $ % ^ & * ( ) _ + - =`
     *
     * >  If your host runs SQL Server, the password cannot contain the account name (case-insensitive).
     * @example testxxxxxx
     *
     * @var string
     */
    public $accountPassword;

    /**
     * @description The type of the host account. Valid values:
     *
     *   **Normal**: standard account.
     *   **Admin**: administrator account.
     *
     * For more information, see [Host permissions](~~176240~~).
     * @example Admin
     *
     * @var string
     */
    public $accountType;

    /**
     * @description The ID of the bastion host with which the host is associated. You can log on to the ApsaraDB for MyBase console and go to the **Bastion Hosts** page to view the bastion host ID.
     *
     * @example bastionhost-cn-xxxxxxxxxxx
     *
     * @var string
     */
    public $bastionInstanceId;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example ETnLKlblzczshOTUbOCz*******
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The host ID. You can call the [DescribeDedicatedHosts](~~200944~~) operation to query the host ID.
     *
     * @example ch-bp10a5id3boqi****
     *
     * @var string
     */
    public $dedicatedHostId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID of the host. You can call the [DescribeDedicatedHostAttribute](~~213010~~) operation to query the region ID.
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
    protected $_name = [
        'accountName'          => 'AccountName',
        'accountPassword'      => 'AccountPassword',
        'accountType'          => 'AccountType',
        'bastionInstanceId'    => 'BastionInstanceId',
        'clientToken'          => 'ClientToken',
        'dedicatedHostId'      => 'DedicatedHostId',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
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
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }
        if (null !== $this->bastionInstanceId) {
            $res['BastionInstanceId'] = $this->bastionInstanceId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dedicatedHostId) {
            $res['DedicatedHostId'] = $this->dedicatedHostId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDedicatedHostAccountRequest
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
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['BastionInstanceId'])) {
            $model->bastionInstanceId = $map['BastionInstanceId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DedicatedHostId'])) {
            $model->dedicatedHostId = $map['DedicatedHostId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
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

        return $model;
    }
}
