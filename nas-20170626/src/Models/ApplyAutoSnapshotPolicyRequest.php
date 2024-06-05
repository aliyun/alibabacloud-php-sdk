<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class ApplyAutoSnapshotPolicyRequest extends Model
{
    /**
     * @description The ID of the automatic snapshot policy.
     *
     * This parameter is required.
     * @example sp-extreme-233e6****
     *
     * @var string
     */
    public $autoSnapshotPolicyId;

    /**
     * @description The IDs of advanced Extreme NAS file systems.
     *
     * This parameter is required.
     * @example extreme-233e6****,extreme -23vbp****,extreme -23vas****
     *
     * @var string
     */
    public $fileSystemIds;
    protected $_name = [
        'autoSnapshotPolicyId' => 'AutoSnapshotPolicyId',
        'fileSystemIds'        => 'FileSystemIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoSnapshotPolicyId) {
            $res['AutoSnapshotPolicyId'] = $this->autoSnapshotPolicyId;
        }
        if (null !== $this->fileSystemIds) {
            $res['FileSystemIds'] = $this->fileSystemIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApplyAutoSnapshotPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoSnapshotPolicyId'])) {
            $model->autoSnapshotPolicyId = $map['AutoSnapshotPolicyId'];
        }
        if (isset($map['FileSystemIds'])) {
            $model->fileSystemIds = $map['FileSystemIds'];
        }

        return $model;
    }
}
