<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class CreateRestoreJobRequest extends Model
{
    /**
     * @var string
     */
    public $uuid;

    /**
     * @var string
     */
    public $snapshotId;

    /**
     * @var string
     */
    public $snapshotHash;

    /**
     * @var string
     */
    public $target;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $vaultId;

    /**
     * @var string
     */
    public $snapshotVersion;

    /**
     * @var string
     */
    public $includes;
    protected $_name = [
        'uuid'            => 'Uuid',
        'snapshotId'      => 'SnapshotId',
        'snapshotHash'    => 'SnapshotHash',
        'target'          => 'Target',
        'sourceType'      => 'SourceType',
        'vaultId'         => 'VaultId',
        'snapshotVersion' => 'SnapshotVersion',
        'includes'        => 'Includes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }
        if (null !== $this->snapshotHash) {
            $res['SnapshotHash'] = $this->snapshotHash;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->vaultId) {
            $res['VaultId'] = $this->vaultId;
        }
        if (null !== $this->snapshotVersion) {
            $res['SnapshotVersion'] = $this->snapshotVersion;
        }
        if (null !== $this->includes) {
            $res['Includes'] = $this->includes;
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
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }
        if (isset($map['SnapshotHash'])) {
            $model->snapshotHash = $map['SnapshotHash'];
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['VaultId'])) {
            $model->vaultId = $map['VaultId'];
        }
        if (isset($map['SnapshotVersion'])) {
            $model->snapshotVersion = $map['SnapshotVersion'];
        }
        if (isset($map['Includes'])) {
            $model->includes = $map['Includes'];
        }

        return $model;
    }
}
