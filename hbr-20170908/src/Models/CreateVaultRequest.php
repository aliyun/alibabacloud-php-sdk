<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Dara\Model;

class CreateVaultRequest extends Model
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
    public $vaultName;

    /**
     * @var string
     */
    public $vaultRegionId;

    /**
     * @var string
     */
    public $vaultStorageClass;

    /**
     * @var string
     */
    public $vaultType;

    /**
     * @var bool
     */
    public $wormEnabled;
    protected $_name = [
        'description' => 'Description',
        'encryptType' => 'EncryptType',
        'kmsKeyId' => 'KmsKeyId',
        'vaultName' => 'VaultName',
        'vaultRegionId' => 'VaultRegionId',
        'vaultStorageClass' => 'VaultStorageClass',
        'vaultType' => 'VaultType',
        'wormEnabled' => 'WormEnabled',
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
