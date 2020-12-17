<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DataDisk extends Model
{
    /**
     * @description 数据盘类型
     *
     * @var string
     */
    public $category;

    /**
     * @description 数据盘大小，取值范围：40～32767
     *
     * @var int
     */
    public $size;

    /**
     * @description 是否对数据盘加密。
     *
     * @var string
     */
    public $encrypted;

    /**
     * @description 开启云盘备份时的自动备份策略。
     *
     * @var string
     */
    public $autoSnapshotPolicyId;
    protected $_name = [
        'category'             => 'category',
        'size'                 => 'size',
        'encrypted'            => 'encrypted',
        'autoSnapshotPolicyId' => 'auto_snapshot_policy_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['category'] = $this->category;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->encrypted) {
            $res['encrypted'] = $this->encrypted;
        }
        if (null !== $this->autoSnapshotPolicyId) {
            $res['auto_snapshot_policy_id'] = $this->autoSnapshotPolicyId;
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
        if (isset($map['category'])) {
            $model->category = $map['category'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }
        if (isset($map['encrypted'])) {
            $model->encrypted = $map['encrypted'];
        }
        if (isset($map['auto_snapshot_policy_id'])) {
            $model->autoSnapshotPolicyId = $map['auto_snapshot_policy_id'];
        }

        return $model;
    }
}
