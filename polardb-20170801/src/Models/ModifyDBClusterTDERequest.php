<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBClusterTDERequest extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * This parameter is required.
     * @example pc-************
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description Specifies whether to allow the TDE key of the cluster to be automatically rotated within the next maintenance window after a lapse of the rotation period when a change in the KMS key version is detected. This parameter is supported only for custom keys. Valid values:
     *
     *   **true**
     *   **false**
     *
     * >  This parameter is supported only for a PolarDB for PostgreSQL or PolarDB for PostgreSQL (Compatible with Oracle) cluster.
     * @example false
     *
     * @var string
     */
    public $enableAutomaticRotation;

    /**
     * @description Specifies whether to enable automatic encryption for new tables. Valid values:
     *
     *   **ON**
     *   **OFF**
     *
     * >  This parameter takes effect only for a PolarDB for MySQL cluster.
     * @example ON
     *
     * @var string
     */
    public $encryptNewTables;

    /**
     * @description The ID of the custom key.
     *
     * @example 749c1df7-****-****-****-*********
     *
     * @var string
     */
    public $encryptionKey;

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
     * @description The Alibaba Cloud Resource Name (ARN) of the RAM role. A RAM role is a virtual identity that you can create within your Alibaba Cloud account. For more information, see [RAM role overview](https://help.aliyun.com/document_detail/93689.html).
     *
     * @example acs:ram::1406926*****:role/aliyunrdsinstanceencryptiondefaultrole
     *
     * @var string
     */
    public $roleArn;

    /**
     * @description Modifies the TDE status. Set the value to **Enable**.
     *
     * This parameter is required.
     * @example Enable
     *
     * @var string
     */
    public $TDEStatus;
    protected $_name = [
        'DBClusterId'             => 'DBClusterId',
        'enableAutomaticRotation' => 'EnableAutomaticRotation',
        'encryptNewTables'        => 'EncryptNewTables',
        'encryptionKey'           => 'EncryptionKey',
        'ownerAccount'            => 'OwnerAccount',
        'ownerId'                 => 'OwnerId',
        'resourceOwnerAccount'    => 'ResourceOwnerAccount',
        'resourceOwnerId'         => 'ResourceOwnerId',
        'roleArn'                 => 'RoleArn',
        'TDEStatus'               => 'TDEStatus',
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
        if (null !== $this->enableAutomaticRotation) {
            $res['EnableAutomaticRotation'] = $this->enableAutomaticRotation;
        }
        if (null !== $this->encryptNewTables) {
            $res['EncryptNewTables'] = $this->encryptNewTables;
        }
        if (null !== $this->encryptionKey) {
            $res['EncryptionKey'] = $this->encryptionKey;
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
        if (null !== $this->roleArn) {
            $res['RoleArn'] = $this->roleArn;
        }
        if (null !== $this->TDEStatus) {
            $res['TDEStatus'] = $this->TDEStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDBClusterTDERequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['EnableAutomaticRotation'])) {
            $model->enableAutomaticRotation = $map['EnableAutomaticRotation'];
        }
        if (isset($map['EncryptNewTables'])) {
            $model->encryptNewTables = $map['EncryptNewTables'];
        }
        if (isset($map['EncryptionKey'])) {
            $model->encryptionKey = $map['EncryptionKey'];
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
        if (isset($map['RoleArn'])) {
            $model->roleArn = $map['RoleArn'];
        }
        if (isset($map['TDEStatus'])) {
            $model->TDEStatus = $map['TDEStatus'];
        }

        return $model;
    }
}
