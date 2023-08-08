<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\ScaleOutClusterRequest;

use AlibabaCloud\Tea\Model;

class workerDataDisks extends Model
{
    /**
     * @example sp-bp14yziiuvu3s6jn****
     *
     * @var string
     */
    public $autoSnapshotPolicyId;

    /**
     * @example cloud_essd
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
     * @example 120
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
