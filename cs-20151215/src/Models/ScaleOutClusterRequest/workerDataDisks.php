<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\ScaleOutClusterRequest;

use AlibabaCloud\Dara\Model;

class workerDataDisks extends Model
{
    /**
     * @var string
     */
    public $autoSnapshotPolicyId;

    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $encrypted;

    /**
     * @var string
     */
    public $size;
    protected $_name = [
        'autoSnapshotPolicyId' => 'auto_snapshot_policy_id',
        'category' => 'category',
        'encrypted' => 'encrypted',
        'size' => 'size',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
