<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBInstanceProxyConfigurationRequest extends Model
{
    /**
     * @description The ID of the instance.
     *
     * This parameter is required.
     * @example rm-uf6wjk5xxxxxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The key of the **configuration item** for the database proxy. Valid values:
     *
     *   **TransparentSwitch**: transparent switchover
     *   **PersistentConnections**: short-lived connection optimization
     *   **AttacksProtection**: brute-force attack protection
     *
     * This parameter is required.
     * @example TransparentSwitch
     *
     * @var string
     */
    public $proxyConfigurationKey;

    /**
     * @description The features and status of the database proxy:
     *
     *   **TransparentSwitch**: transparent switchover. Valid values:
     *
     *   **Enable**: The feature is enabled. This is the default value.
     *   **Disable**: The feature is disabled.
     *
     *   **PersistentConnections**: short-lived connection optimization. Valid values:
     *
     *   **Enable**: The feature is enabled.
     *   **Disable**: The feature is disabled. This is the default value.
     *
     *   **AttacksProtection**: brute-force attack protection. Valid values:
     *
     *   **Enable**: The feature is enabled.
     *   **Disable**: The feature is disabled. This is the default value.
     *
     * This parameter is required.
     * @example {"status":"Enable"}
     *
     * @var string
     */
    public $proxyConfigurationValue;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'DBInstanceId'            => 'DBInstanceId',
        'ownerId'                 => 'OwnerId',
        'proxyConfigurationKey'   => 'ProxyConfigurationKey',
        'proxyConfigurationValue' => 'ProxyConfigurationValue',
        'resourceOwnerAccount'    => 'ResourceOwnerAccount',
        'resourceOwnerId'         => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->proxyConfigurationKey) {
            $res['ProxyConfigurationKey'] = $this->proxyConfigurationKey;
        }
        if (null !== $this->proxyConfigurationValue) {
            $res['ProxyConfigurationValue'] = $this->proxyConfigurationValue;
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
     * @return ModifyDBInstanceProxyConfigurationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ProxyConfigurationKey'])) {
            $model->proxyConfigurationKey = $map['ProxyConfigurationKey'];
        }
        if (isset($map['ProxyConfigurationValue'])) {
            $model->proxyConfigurationValue = $map['ProxyConfigurationValue'];
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
