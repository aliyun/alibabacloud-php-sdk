<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBClusterAccessWhitelistRequest extends Model
{
    /**
     * @description The attributes of the IP whitelist group. Set this parameter to **hidden** to hide the IP whitelist group in the console.
     *
     * > *   The IP whitelist group that has appeared in the console cannot be hidden.
     * > *   This parameter can be specified only when the **WhiteListType** parameter is set to **IP**.
     * @example hidden
     *
     * @var string
     */
    public $DBClusterIPArrayAttribute;

    /**
     * @description The name of the IP whitelist group. The group name must be 2 to 120 characters in length and consists of lowercase letters and digits. It must start with a letter, and end with a letter or a digit.
     *
     *   If the specified whitelist group name does not exist, the whitelist group is created.
     *   If the specified whitelist group name exists, the whitelist group is modified.
     *   If you do not specify this parameter, the default group is modified.
     *
     * >
     *
     *   You can create a maximum of 50 IP whitelist groups for a cluster.
     *
     *   This parameter can be specified only when the **WhiteListType** parameter is set to **IP**.
     *
     * @example default
     *
     * @var string
     */
    public $DBClusterIPArrayName;

    /**
     * @description The cluster ID.
     *
     * @example pc-*************
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The method used to modify the IP whitelist. Valid values:
     *
     *   **Cover** (default): overwrites the original IP whitelist.
     *   **Append**: appends IP addresses to the original whitelist.
     *   **Delete**: deletes IP addresses.
     *
     * >  This parameter can be specified only when the **WhiteListType** parameter is set to **IP**.
     * @example Cover
     *
     * @var string
     */
    public $modifyMode;

    /**
     * @var string
     */
    public $ownerAccount;

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
     * @description The ID of the security group. Separate multiple security groups with commas (,).
     *
     * > *   You can add a maximum of three security groups to a cluster.
     * > *   This parameter can be specified only when the **WhiteListType** parameter is set to **SecurityGroup**.
     * @example sg-*********
     *
     * @var string
     */
    public $securityGroupIds;

    /**
     * @description The IP addresses or Classless Inter-Domain Routing (CIDR) blocks in the IP whitelist group. You can add 1,000 IP addresses or CIDR blocks to all the IP whitelist groups. Separate multiple IP addresses with commas (,). The following two formats are supported:
     *
     *   IP addresses. Example: 10.23.12.24.
     *   CIDR blocks. Example: 10.23.12.24/24. 24 indicates the length of the prefix of the CIDR block. The length is the range of 1 to 32.
     *
     * >  This parameter can be specified only when the **WhiteListType** parameter is set to **IP**.
     * @example 10.23.12.24
     *
     * @var string
     */
    public $securityIps;

    /**
     * @description The type of the whitelist. Valid values:
     *
     *   **IP**: IP whitelist group.
     *   **SecurityGroup**: security group.
     *
     * Default value: **IP**.
     * @example IP
     *
     * @var string
     */
    public $whiteListType;
    protected $_name = [
        'DBClusterIPArrayAttribute' => 'DBClusterIPArrayAttribute',
        'DBClusterIPArrayName'      => 'DBClusterIPArrayName',
        'DBClusterId'               => 'DBClusterId',
        'modifyMode'                => 'ModifyMode',
        'ownerAccount'              => 'OwnerAccount',
        'ownerId'                   => 'OwnerId',
        'resourceOwnerAccount'      => 'ResourceOwnerAccount',
        'resourceOwnerId'           => 'ResourceOwnerId',
        'securityGroupIds'          => 'SecurityGroupIds',
        'securityIps'               => 'SecurityIps',
        'whiteListType'             => 'WhiteListType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterIPArrayAttribute) {
            $res['DBClusterIPArrayAttribute'] = $this->DBClusterIPArrayAttribute;
        }
        if (null !== $this->DBClusterIPArrayName) {
            $res['DBClusterIPArrayName'] = $this->DBClusterIPArrayName;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->modifyMode) {
            $res['ModifyMode'] = $this->modifyMode;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
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
        if (null !== $this->securityGroupIds) {
            $res['SecurityGroupIds'] = $this->securityGroupIds;
        }
        if (null !== $this->securityIps) {
            $res['SecurityIps'] = $this->securityIps;
        }
        if (null !== $this->whiteListType) {
            $res['WhiteListType'] = $this->whiteListType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDBClusterAccessWhitelistRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterIPArrayAttribute'])) {
            $model->DBClusterIPArrayAttribute = $map['DBClusterIPArrayAttribute'];
        }
        if (isset($map['DBClusterIPArrayName'])) {
            $model->DBClusterIPArrayName = $map['DBClusterIPArrayName'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['ModifyMode'])) {
            $model->modifyMode = $map['ModifyMode'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
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
        if (isset($map['SecurityGroupIds'])) {
            $model->securityGroupIds = $map['SecurityGroupIds'];
        }
        if (isset($map['SecurityIps'])) {
            $model->securityIps = $map['SecurityIps'];
        }
        if (isset($map['WhiteListType'])) {
            $model->whiteListType = $map['WhiteListType'];
        }

        return $model;
    }
}
