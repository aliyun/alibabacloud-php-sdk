<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DataDisk extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $autoFormat;

    /**
     * @example sp-2zej1nogjvovnz4z****
     *
     * @var string
     */
    public $autoSnapshotPolicyId;

    /**
     * @example true
     *
     * @var bool
     */
    public $burstingEnabled;

    /**
     * @example cloud_ssd
     *
     * @var string
     */
    public $category;

    /**
     * @example true
     *
     * @var string
     */
    public $encrypted;

    /**
     * @example ext4
     *
     * @var string
     */
    public $fileSystem;

    /**
     * @example 0e478b7a-4262-4802-b8cb-00d3fb40****
     *
     * @var string
     */
    public $kmsKeyId;

    /**
     * @example /mnt/path1
     *
     * @var string
     */
    public $mountTarget;

    /**
     * @example PL1
     *
     * @var string
     */
    public $performanceLevel;

    /**
     * @example 1000
     *
     * @var int
     */
    public $provisionedIops;

    /**
     * @example 40
     *
     * @var int
     */
    public $size;
    protected $_name = [
        'autoFormat'           => 'auto_format',
        'autoSnapshotPolicyId' => 'auto_snapshot_policy_id',
        'burstingEnabled'      => 'bursting_enabled',
        'category'             => 'category',
        'encrypted'            => 'encrypted',
        'fileSystem'           => 'file_system',
        'kmsKeyId'             => 'kms_key_id',
        'mountTarget'          => 'mount_target',
        'performanceLevel'     => 'performance_level',
        'provisionedIops'      => 'provisioned_iops',
        'size'                 => 'size',
    ];

    public function validate()
    {
    }

    public function toMap()
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DataDisk
     */
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

        return $model;
    }
}
