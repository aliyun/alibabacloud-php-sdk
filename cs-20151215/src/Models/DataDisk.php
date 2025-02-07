<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;

class DataDisk extends Model
{
    /**
     * @var bool
     */
    public $autoFormat;
    /**
     * @var string
     */
    public $autoSnapshotPolicyId;
    /**
     * @var bool
     */
    public $burstingEnabled;
    /**
     * @var string
     */
    public $category;
    /**
     * @var string
     */
    public $device;
    /**
     * @var string
     */
    public $diskName;
    /**
     * @var string
     */
    public $encrypted;
    /**
     * @var string
     */
    public $fileSystem;
    /**
     * @var string
     */
    public $kmsKeyId;
    /**
     * @var string
     */
    public $mountTarget;
    /**
     * @var string
     */
    public $performanceLevel;
    /**
     * @var int
     */
    public $provisionedIops;
    /**
     * @var int
     */
    public $size;
    /**
     * @var string
     */
    public $snapshotId;
    protected $_name = [
        'autoFormat'           => 'auto_format',
        'autoSnapshotPolicyId' => 'auto_snapshot_policy_id',
        'burstingEnabled'      => 'bursting_enabled',
        'category'             => 'category',
        'device'               => 'device',
        'diskName'             => 'disk_name',
        'encrypted'            => 'encrypted',
        'fileSystem'           => 'file_system',
        'kmsKeyId'             => 'kms_key_id',
        'mountTarget'          => 'mount_target',
        'performanceLevel'     => 'performance_level',
        'provisionedIops'      => 'provisioned_iops',
        'size'                 => 'size',
        'snapshotId'           => 'snapshot_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoFormat) {
            $res['auto_format'] = $this->autoFormat;
        }

        if (null !== $this->autoSnapshotPolicyId) {
            $res['auto_snapshot_policy_id'] = $this->autoSnapshotPolicyId;
        }

        if (null !== $this->burstingEnabled) {
            $res['bursting_enabled'] = $this->burstingEnabled;
        }

        if (null !== $this->category) {
            $res['category'] = $this->category;
        }

        if (null !== $this->device) {
            $res['device'] = $this->device;
        }

        if (null !== $this->diskName) {
            $res['disk_name'] = $this->diskName;
        }

        if (null !== $this->encrypted) {
            $res['encrypted'] = $this->encrypted;
        }

        if (null !== $this->fileSystem) {
            $res['file_system'] = $this->fileSystem;
        }

        if (null !== $this->kmsKeyId) {
            $res['kms_key_id'] = $this->kmsKeyId;
        }

        if (null !== $this->mountTarget) {
            $res['mount_target'] = $this->mountTarget;
        }

        if (null !== $this->performanceLevel) {
            $res['performance_level'] = $this->performanceLevel;
        }

        if (null !== $this->provisionedIops) {
            $res['provisioned_iops'] = $this->provisionedIops;
        }

        if (null !== $this->size) {
            $res['size'] = $this->size;
        }

        if (null !== $this->snapshotId) {
            $res['snapshot_id'] = $this->snapshotId;
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
        if (isset($map['auto_format'])) {
            $model->autoFormat = $map['auto_format'];
        }

        if (isset($map['auto_snapshot_policy_id'])) {
            $model->autoSnapshotPolicyId = $map['auto_snapshot_policy_id'];
        }

        if (isset($map['bursting_enabled'])) {
            $model->burstingEnabled = $map['bursting_enabled'];
        }

        if (isset($map['category'])) {
            $model->category = $map['category'];
        }

        if (isset($map['device'])) {
            $model->device = $map['device'];
        }

        if (isset($map['disk_name'])) {
            $model->diskName = $map['disk_name'];
        }

        if (isset($map['encrypted'])) {
            $model->encrypted = $map['encrypted'];
        }

        if (isset($map['file_system'])) {
            $model->fileSystem = $map['file_system'];
        }

        if (isset($map['kms_key_id'])) {
            $model->kmsKeyId = $map['kms_key_id'];
        }

        if (isset($map['mount_target'])) {
            $model->mountTarget = $map['mount_target'];
        }

        if (isset($map['performance_level'])) {
            $model->performanceLevel = $map['performance_level'];
        }

        if (isset($map['provisioned_iops'])) {
            $model->provisionedIops = $map['provisioned_iops'];
        }

        if (isset($map['size'])) {
            $model->size = $map['size'];
        }

        if (isset($map['snapshot_id'])) {
            $model->snapshotId = $map['snapshot_id'];
        }

        return $model;
    }
}
