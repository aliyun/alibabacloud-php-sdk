<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Tea\Model;

class CreateVaultRequest extends Model
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
     * @example KMS
     *
     * @var string
     */
    public $encryptType;

    /**
     * @description The customer master key (CMK) created in KMS or the alias of the key. This parameter is required only if you set the EncryptType parameter to KMS.
     *
     * @example alias/yzs-hhht
     *
     * @var string
     */
    public $kmsKeyId;

    /**
     * @description The name of the backup vault. The name must be 1 to 64 characters in length.
     *
     * This parameter is required.
     * @example backupvaultname
     *
     * @var string
     */
    public $vaultName;

    /**
     * @description The ID of the region where the backup vault resides.
     *
     * This parameter is required.
     * @example cn-shanghai
     *
     * @var string
     */
    public $vaultRegionId;

    /**
     * @description The storage type of the backup vault. Valid value:
     * - **STANDARD**: standard storage.
     * - **ARCHIVE**: deprected.
     * - **COLD_ARCHIVE**: deprected.
     * - **IA**: deprected.
     * @example STANDARD
     *
     * @var string
     */
    public $vaultStorageClass;

    /**
     * @description The type of the backup vault. Valid values:
     *
     *   **STANDARD**: standard backup vault
     *   **OTS_BACKUP**: backup vault for Tablestore
     *
     * @example STANDARD
     *
     * @var string
     */
    public $vaultType;

    /**
     * @description Whether to enable the vault worm feature. Once the worm feature is enabled, the vault and all its backup data cannot be deleted before they automatically expire. After enabling the worm feature, it is not supported to disable it. The worm feature is only effective for standard and archive backup vault.
     *
     * @example false
     *
     * @var bool
     */
    public $wormEnabled;
    protected $_name = [
        'description'       => 'Description',
        'encryptType'       => 'EncryptType',
        'kmsKeyId'          => 'KmsKeyId',
        'vaultName'         => 'VaultName',
        'vaultRegionId'     => 'VaultRegionId',
        'vaultStorageClass' => 'VaultStorageClass',
        'vaultType'         => 'VaultType',
        'wormEnabled'       => 'WormEnabled',
    ];

    public function validate()
    {
    }

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
        if (null !== $this->vaultName) {
            $res['VaultName'] = $this->vaultName;
        }
        if (null !== $this->vaultRegionId) {
            $res['VaultRegionId'] = $this->vaultRegionId;
        }
        if (null !== $this->vaultStorageClass) {
            $res['VaultStorageClass'] = $this->vaultStorageClass;
        }
        if (null !== $this->vaultType) {
            $res['VaultType'] = $this->vaultType;
        }
        if (null !== $this->wormEnabled) {
            $res['WormEnabled'] = $this->wormEnabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVaultRequest
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
        if (isset($map['VaultName'])) {
            $model->vaultName = $map['VaultName'];
        }
        if (isset($map['VaultRegionId'])) {
            $model->vaultRegionId = $map['VaultRegionId'];
        }
        if (isset($map['VaultStorageClass'])) {
            $model->vaultStorageClass = $map['VaultStorageClass'];
        }
        if (isset($map['VaultType'])) {
            $model->vaultType = $map['VaultType'];
        }
        if (isset($map['WormEnabled'])) {
            $model->wormEnabled = $map['WormEnabled'];
        }

        return $model;
    }
}
