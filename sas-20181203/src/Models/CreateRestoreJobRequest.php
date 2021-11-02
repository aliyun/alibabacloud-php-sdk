<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class CreateRestoreJobRequest extends Model
{
    /**
     * @var string
     */
    public $includes;

    /**
     * @var string
     */
    public $snapshotHash;

    /**
     * @var string
     */
    public $snapshotId;

    /**
     * @var string
     */
    public $snapshotVersion;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $target;

    /**
     * @var string
     */
    public $uuid;

    /**
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
