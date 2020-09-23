<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterRequest;

use AlibabaCloud\Tea\Model;

class workerDataDisks extends Model
{
    /**
     * @description 数据盘是否开启云盘备份。
     *
     * @var string
     */
    public $autoSnapshotPolicyId;

    /**
     * @description 数据盘类型。
     *
     * @var string
     */
    public $category;

    /**
     * @description 数据盘是否加密。
     *
     * @var string
     */
    public $encrypted;

    /**
     * @description 数据盘大小。
     *
     * @var string
     */
    public $size;
    protected $_name = [
        'autoSnapshotPolicyId' => 'auto_snapshot_policy_id',
        'category'             => 'category',
        'encrypted'            => 'encrypted',
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
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return workerDataDisks
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
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }

        return $model;
    }
}
