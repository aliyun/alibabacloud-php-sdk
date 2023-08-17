<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBClusterAccessWhiteListRequest extends Model
{
    /**
     * @description The attribute of the whitelist. This parameter is empty by default.
     *
     * The IP address whitelists that have the hidden attribute are not displayed in the AnalyticDB for MySQL console. These IP address whitelists are used to access Alibaba Cloud services such as Data Transmission Service (DTS) and PolarDB-X.
     * @example hidden
     *
     * @var string
     */
    public $DBClusterIPArrayAttribute;

    /**
     * @description The name of the IP address whitelist to be modified. Default value: Default.
     *
     * You can create up to 50 whitelists for a cluster.
     * @example test
     *
     * @var string
     */
    public $DBClusterIPArrayName;

    /**
     * @description The ID of the cluster.
     *
     * @example rm-uf6wjk5xxxxxxxxxx
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The method used to modify the whitelist. Valid values:
     *
     *   Cover: overwrites the original IP address whitelist.
     *   Append: adds one or more IP addresses.
     *   Delete: deletes one or more IP addresses.
     *
     * Default value: Cover.
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
     * @description The IP addresses in an IP address whitelist of a cluster. Separate multiple IP addresses with commas (,). You can add a maximum of 500 different IP addresses to a whitelist. The following formats are supported:
     *
     *   IP addresses. Example: 10.23.12.24.
     *   CIDR blocks. Example: 10.23.12.24/24. 24 indicates that the prefix of the CIDR block is 24-bit long. You can replace 24 with a value within the range of 1 to 32.
     *
     * This parameter must be specified unless the ModifyMode parameter is set to Delete.
     * @example 10.23.12.24
     *
     * @var string
     */
    public $securityIps;
    protected $_name = [
        'DBClusterIPArrayAttribute' => 'DBClusterIPArrayAttribute',
        'DBClusterIPArrayName'      => 'DBClusterIPArrayName',
        'DBClusterId'               => 'DBClusterId',
        'modifyMode'                => 'ModifyMode',
        'ownerAccount'              => 'OwnerAccount',
        'ownerId'                   => 'OwnerId',
        'resourceOwnerAccount'      => 'ResourceOwnerAccount',
        'resourceOwnerId'           => 'ResourceOwnerId',
        'securityIps'               => 'SecurityIps',
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
        if (null !== $this->securityIps) {
            $res['SecurityIps'] = $this->securityIps;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDBClusterAccessWhiteListRequest
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
        if (isset($map['SecurityIps'])) {
            $model->securityIps = $map['SecurityIps'];
        }

        return $model;
    }
}
