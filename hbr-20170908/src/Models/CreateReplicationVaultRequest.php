<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Dara\Model;

class CreateReplicationVaultRequest extends Model
{
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $encryptType;
    /**
     * @var string
     */
    public $kmsKeyId;
    /**
     * @var string
     */
    public $redundancyType;
    /**
     * @var string
     */
    public $replicationSourceRegionId;
    /**
     * @var string
     */
    public $replicationSourceVaultId;
    /**
     * @var string
     */
    public $vaultName;
    /**
     * @var string
     */
    public $vaultRegionId;
    /**
     * @var string
     */
    public $vaultStorageClass;
    protected $_name = [
        'description'               => 'Description',
        'encryptType'               => 'EncryptType',
        'kmsKeyId'                  => 'KmsKeyId',
        'redundancyType'            => 'RedundancyType',
        'replicationSourceRegionId' => 'ReplicationSourceRegionId',
        'replicationSourceVaultId'  => 'ReplicationSourceVaultId',
        'vaultName'                 => 'VaultName',
        'vaultRegionId'             => 'VaultRegionId',
        'vaultStorageClass'         => 'VaultStorageClass',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
