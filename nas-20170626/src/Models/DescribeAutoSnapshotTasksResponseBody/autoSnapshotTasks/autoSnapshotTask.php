<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAutoSnapshotTasksResponseBody\autoSnapshotTasks;

use AlibabaCloud\Dara\Model;

class autoSnapshotTask extends Model
{
    /**
     * @var string
     */
    public $autoSnapshotPolicyId;
    /**
     * @var string
     */
    public $sourceFileSystemId;
    protected $_name = [
        'autoSnapshotPolicyId' => 'AutoSnapshotPolicyId',
        'sourceFileSystemId'   => 'SourceFileSystemId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoSnapshotPolicyId) {
            $res['AutoSnapshotPolicyId'] = $this->autoSnapshotPolicyId;
        }

        if (null !== $this->sourceFileSystemId) {
            $res['SourceFileSystemId'] = $this->sourceFileSystemId;
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
        if (isset($map['AutoSnapshotPolicyId'])) {
            $model->autoSnapshotPolicyId = $map['AutoSnapshotPolicyId'];
        }

        if (isset($map['SourceFileSystemId'])) {
            $model->sourceFileSystemId = $map['SourceFileSystemId'];
        }

        return $model;
    }
}
