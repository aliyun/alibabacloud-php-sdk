<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAutoSnapshotTasksResponseBody\autoSnapshotTasks;

use AlibabaCloud\Tea\Model;

class autoSnapshotTask extends Model
{
    /**
     * @var string
     */
    public $sourceFileSystemId;

    /**
     * @var string
     */
    public $autoSnapshotPolicyId;
    protected $_name = [
        'sourceFileSystemId'   => 'SourceFileSystemId',
        'autoSnapshotPolicyId' => 'AutoSnapshotPolicyId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceFileSystemId) {
            $res['SourceFileSystemId'] = $this->sourceFileSystemId;
        }
        if (null !== $this->autoSnapshotPolicyId) {
            $res['AutoSnapshotPolicyId'] = $this->autoSnapshotPolicyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return autoSnapshotTask
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceFileSystemId'])) {
            $model->sourceFileSystemId = $map['SourceFileSystemId'];
        }
        if (isset($map['AutoSnapshotPolicyId'])) {
            $model->autoSnapshotPolicyId = $map['AutoSnapshotPolicyId'];
        }

        return $model;
    }
}
