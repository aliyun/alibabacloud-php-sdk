<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBInstanceTDERequest extends Model
{
    /**
     * @description The ID of an instance.
     *
     * @example dds-bpxxxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The custom key.
     *
     * @example 749c1df7-xxxx-xxxx-xxxx-xxxxxxxxxxxx
     *
     * @var string
     */
    public $encryptionKey;

    /**
     * @description The encryption method. Set the value to **AES-256-CBC**.
     *
     * >  This parameter is valid only when you specify the **TEDStatus** parameter to **enabled**.
     * @example aes-256-cbc
     *
     * @var string
     */
    public $encryptorName;

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
     * @description The ARN of the role. It is in the format of `acs:ram::$accountID:role/$roleName`.
     *
     * > * `$accountID`: indicates the ID of the Alibaba Cloud account that owns the RAM role. To view the account ID, log on to the Alibaba Cloud Management Console, move your pointer over your profile picture in the upper-right corner, and then click Security Settings.
     * > * `$roleName`: indicates the name of the RAM role. To view the RAM role name, perform the following steps: Log on to the RAM console. In the left-side navigation pane, click RAM Roles. In the RAM Role Name column on the page that appears, you can view the name of the RAM role.
     * @example acs:ram::123456789012****:role/adminrole
     *
     * @var string
     */
    public $roleARN;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description The TDE status. Set the value to **Enabled**.
     *
     * >  Exercise caution when enabling TDE. After TDE is enabled, it cannot be disabled.
     * @example enabled
     *
     * @var string
     */
    public $TDEStatus;
    protected $_name = [
        'DBInstanceId'         => 'DBInstanceId',
        'encryptionKey'        => 'EncryptionKey',
        'encryptorName'        => 'EncryptorName',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'roleARN'              => 'RoleARN',
        'securityToken'        => 'SecurityToken',
        'TDEStatus'            => 'TDEStatus',
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
        if (null !== $this->encryptionKey) {
            $res['EncryptionKey'] = $this->encryptionKey;
        }
        if (null !== $this->encryptorName) {
            $res['EncryptorName'] = $this->encryptorName;
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
        if (null !== $this->roleARN) {
            $res['RoleARN'] = $this->roleARN;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->TDEStatus) {
            $res['TDEStatus'] = $this->TDEStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDBInstanceTDERequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['EncryptionKey'])) {
            $model->encryptionKey = $map['EncryptionKey'];
        }
        if (isset($map['EncryptorName'])) {
            $model->encryptorName = $map['EncryptorName'];
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
        if (isset($map['RoleARN'])) {
            $model->roleARN = $map['RoleARN'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['TDEStatus'])) {
            $model->TDEStatus = $map['TDEStatus'];
        }

        return $model;
    }
}
