<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBInstanceProxyConfigurationRequest extends Model
{
    /**
     * @description The ID of the instance.
     *
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
     * @example TransparentSwitch
     *
     * @var string
     */
    public $proxyConfigurationKey;

    /**
     * @description The value of the **configuration item** for the database proxy. Valid values:
     *
     *   If you set the ProxyConfigurationKey parameter to **TransparentSwitch**, you can set this parameter to one of the following values:
     *
     *   **Enable**. This is the default value.
     *   **Disable**. Example: {"status":"Enable"}.
     *
     *   If you set the ProxyConfigurationKey parameter to **PersistentConnections**, you can set this parameter to one of the following values:
     *
     *   **Enable**.
     *   **Disable**. This is the default value. Example: {"status":"Disable"}.
     *
     *   If you set the ProxyConfigurationKey parameter to **AttacksProtection**, you can set this parameter to one of the following values:
     *
     *   **Enable**.
     *   **Disable**. This is the default value. Example: {"status":"Disable"}.
     *
     * Description and valid values:
     *
     *   Each client allows {max_failed_login_attempts} logon attempts upon failure within {check_interval_seconds} seconds. If the number of logon attempts exceeds the limit, the client is disabled for {blocking_seconds} seconds before the client can try again.
     *   The following list describes the valid values of each field in the preceding example.
     *
     * check_interval_seconds: **30 to 600**. Unit: seconds. max_failed_login_attempts: **10 to 5000**. Unit: number of times. blocking_seconds: **30 to 3600**. Unit: seconds.
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
