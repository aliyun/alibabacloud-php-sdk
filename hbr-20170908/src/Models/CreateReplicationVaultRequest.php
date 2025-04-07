<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Tea\Model;

class CreateReplicationVaultRequest extends Model
{
    /**
     * @description The description of the backup vault. The description must be 0 to 255 characters in length.
     *
     * @example description
     *
     * @var string
     */
    public $description;

    /**
     * @description The method that is used to encrypt the source data. This parameter is valid only if you set the VaultType parameter to STANDARD or OTS_BACKUP. Valid values:
     *
     *   **HBR_PRIVATE**: The source data is encrypted by using the built-in encryption method of Hybrid Backup Recovery (HBR).
     *   **KMS**: The source data is encrypted by using Key Management Service (KMS).
     *
     * @example HBR_PRIVATE
     *
     * @var string
     */
    public $encryptType;

    /**
     * @description The customer master key (CMK) created in KMS or the alias of the key. This parameter is required only if you set the EncryptType parameter to KMS.
     *
     * @example alias/test
     *
     * @var string
     */
    public $kmsKeyId;

    /**
     * @description The data redundancy type of the backup vault. Valid values:
     *
     *   LRS: standard locally redundant storage (LRS). Cloud Backup stores the copies of each object on multiple devices of different facilities in the same zone. This way, Cloud Backup ensures data durability and availability even if hardware failures occur.
     *   ZRS: standard zone-redundant storage (ZRS). Cloud Backup uses the multi-zone mechanism to distribute data across three zones within the same region. If a zone fails, the data that is stored in the other two zones is still accessible.
     *
     * @example LRS
     *
     * @var string
     */
    public $redundancyType;

    /**
     * @description The ID of the region where the source vault resides.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $replicationSourceRegionId;

    /**
     * @description The ID of the source vault.
     *
     * This parameter is required.
     *
     * @example v-*********************
     *
     * @var string
     */
    public $replicationSourceVaultId;

    /**
     * @description The name of the backup vault. The name must be 1 to 64 characters in length.
     *
     * This parameter is required.
     *
     * @example mirrorvaultname
     *
     * @var string
     */
    public $vaultName;

    /**
     * @description The ID of the region where the backup vault resides.
     *
     * This parameter is required.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $vaultRegionId;

    /**
     * @description The storage type of the backup vault. Valid value: **STANDARD**, which indicates standard storage.
     *
     * @example STANDARD
     *
     * @var string
     */
    public $vaultStorageClass;
    protected $_name = [
        'description' => 'Description',
        'encryptType' => 'EncryptType',
        'kmsKeyId' => 'KmsKeyId',
        'redundancyType' => 'RedundancyType',
        'replicationSourceRegionId' => 'ReplicationSourceRegionId',
        'replicationSourceVaultId' => 'ReplicationSourceVaultId',
        'vaultName' => 'VaultName',
        'vaultRegionId' => 'VaultRegionId',
        'vaultStorageClass' => 'VaultStorageClass',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->encryptType) {
            $res['EncryptType'] = $this->encryptType;
        }
        if (null !== $this->kmsKeyId) {
            $res['KmsKeyId'] = $this->kmsKeyId;
        }
        if (null !== $this->redundancyType) {
            $res['RedundancyType'] = $this->redundancyType;
        }
        if (null !== $this->replicationSourceRegionId) {
            $res['ReplicationSourceRegionId'] = $this->replicationSourceRegionId;
        }
        if (null !== $this->replicationSourceVaultId) {
            $res['ReplicationSourceVaultId'] = $this->replicationSourceVaultId;
        }
        if (null !== $this->vaultName) {
            $res['VaultName'] = $this->vaultName;
        }
        if (null !== $this->vaultRegionId) {
            $res['VaultRegionId'] = $this->vaultRegionId;
        }
        if (null !== $this->vaultStorageClass) {
            $res['VaultStorageClass'] = $this->vaultStorageClass;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateReplicationVaultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EncryptType'])) {
            $model->encryptType = $map['EncryptType'];
        }
        if (isset($map['KmsKeyId'])) {
            $model->kmsKeyId = $map['KmsKeyId'];
        }
        if (isset($map['RedundancyType'])) {
            $model->redundancyType = $map['RedundancyType'];
        }
        if (isset($map['ReplicationSourceRegionId'])) {
            $model->replicationSourceRegionId = $map['ReplicationSourceRegionId'];
        }
        if (isset($map['ReplicationSourceVaultId'])) {
            $model->replicationSourceVaultId = $map['ReplicationSourceVaultId'];
        }
        if (isset($map['VaultName'])) {
            $model->vaultName = $map['VaultName'];
        }
        if (isset($map['VaultRegionId'])) {
            $model->vaultRegionId = $map['VaultRegionId'];
        }
        if (isset($map['VaultStorageClass'])) {
            $model->vaultStorageClass = $map['VaultStorageClass'];
        }

        return $model;
    }
}
