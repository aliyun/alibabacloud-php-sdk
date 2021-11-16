<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DataDisk extends Model
{
    /**
     * @description 开启云盘备份时的自动备份策略。
     *
     * @var string
     */
    public $autoSnapshotPolicyId;

    /**
     * @description 数据盘类型
     *
     * @var string
     */
    public $category;

    /**
     * @description 是否对数据盘加密。
     *
     * @var string
     */
    public $encrypted;

    /**
     * @description 数据盘磁盘性能，只针对ESSD磁盘生效
     *
     * @var string
     */
    public $performanceLevel;

    /**
     * @description 数据盘大小，取值范围：40～32767
     *
     * @var int
     */
    public $size;
    protected $_name = [
        'autoSnapshotPolicyId' => 'auto_snapshot_policy_id',
        'category'             => 'category',
        'encrypted'            => 'encrypted',
        'performanceLevel'     => 'performance_level',
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
        if (null !== $this->category) {
            $res['category'] = $this->category;
        }
        if (null !== $this->encrypted) {
            $res['encrypted'] = $this->encrypted;
        }
        if (null !== $this->performanceLevel) {
            $res['performance_level'] = $this->performanceLevel;
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
        if (isset($map['category'])) {
            $model->category = $map['category'];
        }
        if (isset($map['encrypted'])) {
            $model->encrypted = $map['encrypted'];
        }
        if (isset($map['performance_level'])) {
            $model->performanceLevel = $map['performance_level'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }

        return $model;
    }
}
