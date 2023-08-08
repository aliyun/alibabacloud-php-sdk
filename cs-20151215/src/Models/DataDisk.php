<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DataDisk extends Model
{
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
        'autoSnapshotPolicyId' => 'auto_snapshot_policy_id',
        'burstingEnabled'      => 'bursting_enabled',
        'category'             => 'category',
        'encrypted'            => 'encrypted',
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
