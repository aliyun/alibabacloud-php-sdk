<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class CreateRestoreJobRequest extends Model
{
    /**
     * @description The directory in which the files included in the restoration task are located. This parameter is specified when you create the anti-ransomware policy. The value is a directory that requires protection.
     *
     * This parameter is required.
     * @example ["root"]
     *
     * @var string
     */
    public $includes;

    /**
     * @description The hash value of the snapshot.
     *
     * This parameter is required.
     * @example d4b399edaad94b038e8f91873f19e3eae010ca30798fc36db3a164dd343f****
     *
     * @var string
     */
    public $snapshotHash;

    /**
     * @description The ID of the snapshot that you want to use for restoration.
     *
     * This parameter is required.
     * @example s-00023dhaatxp18mh****
     *
     * @var string
     */
    public $snapshotId;

    /**
     * @description The version of the backup data.
     *
     * This parameter is required.
     * @example 165570544****
     *
     * @var string
     */
    public $snapshotVersion;

    /**
     * @description The type of the data source. Valid values:
     *
     *   **ECS_FILE**: backup snapshots for Elastic Compute Service (ECS) files
     *   **File**: backup snapshots for on-premises servers
     *
     * @example ECS_FILE
     *
     * @var string
     */
    public $sourceType;

    /**
     * @description The path to which you want to restore data.
     *
     * This parameter is required.
     * @example /root/testfls
     *
     * @var string
     */
    public $target;

    /**
     * @description The UUID of the server whose data you want to restore.
     *
     * This parameter is required.
     * @example inet-ecs-4e876cb0-09f7-43b8-82ef-4bc7a93769b5
     *
     * @var string
     */
    public $uuid;

    /**
     * @description The ID of the backup vault that is used in the restoration task.
     *
     * This parameter is required.
     * @example v-0002n12wokck2q0x****
     *
     * @var string
     */
    public $vaultId;
    protected $_name = [
        'includes'        => 'Includes',
        'snapshotHash'    => 'SnapshotHash',
        'snapshotId'      => 'SnapshotId',
        'snapshotVersion' => 'SnapshotVersion',
        'sourceType'      => 'SourceType',
        'target'          => 'Target',
        'uuid'            => 'Uuid',
        'vaultId'         => 'VaultId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->includes) {
            $res['Includes'] = $this->includes;
        }
        if (null !== $this->snapshotHash) {
            $res['SnapshotHash'] = $this->snapshotHash;
        }
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }
        if (null !== $this->snapshotVersion) {
            $res['SnapshotVersion'] = $this->snapshotVersion;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->vaultId) {
            $res['VaultId'] = $this->vaultId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRestoreJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Includes'])) {
            $model->includes = $map['Includes'];
        }
        if (isset($map['SnapshotHash'])) {
            $model->snapshotHash = $map['SnapshotHash'];
        }
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }
        if (isset($map['SnapshotVersion'])) {
            $model->snapshotVersion = $map['SnapshotVersion'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['VaultId'])) {
            $model->vaultId = $map['VaultId'];
        }

        return $model;
    }
}
