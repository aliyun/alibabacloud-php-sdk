<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class CreateRestoreJobRequest extends Model
{
    /**
     * @example ["root"]
     *
     * @var string
     */
    public $includes;

    /**
     * @example d4b399edaad94b038e8f91873f19e3eae010ca30798fc36db3a164dd343f****
     *
     * @var string
     */
    public $snapshotHash;

    /**
     * @example s-00023dhaatxp18mh****
     *
     * @var string
     */
    public $snapshotId;

    /**
     * @example 165570544****
     *
     * @var string
     */
    public $snapshotVersion;

    /**
     * @example ECS_FILE
     *
     * @var string
     */
    public $sourceType;

    /**
     * @example /root/testfls
     *
     * @var string
     */
    public $target;

    /**
     * @example inet-ecs-4e876cb0-09f7-43b8-82ef-4bc7a93769b5
     *
     * @var string
     */
    public $uuid;

    /**
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
