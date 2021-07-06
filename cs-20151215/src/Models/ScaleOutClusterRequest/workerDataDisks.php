<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\ScaleOutClusterRequest;

use AlibabaCloud\Tea\Model;

class workerDataDisks extends Model
{
    /**
     * @description 数据盘类型,默认值：cloud_efficiency
     *
     * @var string
     */
    public $category;

    /**
     * @description 数据盘大小，单位为GiB。  取值范围：[40,32768]
     *
     * @var string
     */
    public $size;

    /**
     * @description 是否对数据盘加密
     *
     * @var string
     */
    public $encrypted;

    /**
     * @description 自动快照策略ID，云盘会按照快照策略自动备份。
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
     * @return workerDataDisks
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
