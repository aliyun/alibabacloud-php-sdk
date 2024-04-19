<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\ScaleOutClusterRequest;

use AlibabaCloud\Tea\Model;

class workerDataDisks extends Model
{
    /**
     * @description The ID of an automatic snapshot policy. Automatic backup is performed for a disk based on the specified automatic snapshot policy.
     *
     * By default, this parameter is empty, which indicates that automatic backup is disabled.
     * @example sp-bp14yziiuvu3s6jn****
     *
     * @var string
     */
    public $autoSnapshotPolicyId;

    /**
     * @description The data disk type.
     *
     * @example cloud_essd
     *
     * @var string
     */
    public $category;

    /**
     * @description Specifies whether to encrypt the data disks. Valid values:
     *
     *   `true`: encrypts data disks.
     *   `false`: does not encrypt data disks.
     *
     * Default value: `false`.
     * @example true
     *
     * @var string
     */
    public $encrypted;

    /**
     * @description The size of the data disk. Valid values: 40 to 32767.
     *
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
