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
     * @description The data redundancy type of the backup vault. Valid values:
     *
     * - ZRS: Zone-redundant storage (ZRS) is enabled for the backup vault. HBR uses the multi-zone mechanism to distribute data across three zones within the same region. If a zone becomes unavailable, the data can still be accessed.
     * @example LRS
     *
     * @var string
     */
    public $redundancyType;

    /**
     * @description The ID of the region where the source vault resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $replicationSourceRegionId;

    /**
     * @description The ID of the source vault.
     *
     * @example v-*********************
     *
     * @var string
     */
    public $replicationSourceVaultId;

    /**
     * @description The name of the backup vault. The name must be 1 to 64 characters in length.
     *
     * @example mirrorvaultname
     *
     * @var string
     */
    public $vaultName;

    /**
     * @description The ID of the region where the backup vault resides.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $vaultRegionId;

    /**
     * @description The storage type of the backup vault. Valid value: **STANDARD**. The value indicates standard storage.
     *
     * @example STANDARD
     *
     * @var string
     */
    public $vaultStorageClass;
    protected $_name = [
        'description'               => 'Description',
        'redundancyType'            => 'RedundancyType',
        'replicationSourceRegionId' => 'ReplicationSourceRegionId',
        'replicationSourceVaultId'  => 'ReplicationSourceVaultId',
        'vaultName'                 => 'VaultName',
        'vaultRegionId'             => 'VaultRegionId',
        'vaultStorageClass'         => 'VaultStorageClass',
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
