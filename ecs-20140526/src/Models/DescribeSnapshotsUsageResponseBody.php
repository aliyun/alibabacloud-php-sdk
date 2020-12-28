<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class DescribeSnapshotsUsageResponseBody extends Model
{
    /**
     * @var int
     */
    public $snapshotCount;

    /**
     * @var int
     */
    public $snapshotSize;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'snapshotCount' => 'SnapshotCount',
        'snapshotSize'  => 'SnapshotSize',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->snapshotCount) {
            $res['SnapshotCount'] = $this->snapshotCount;
        }
        if (null !== $this->snapshotSize) {
            $res['SnapshotSize'] = $this->snapshotSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSnapshotsUsageResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SnapshotCount'])) {
            $model->snapshotCount = $map['SnapshotCount'];
        }
        if (isset($map['SnapshotSize'])) {
            $model->snapshotSize = $map['SnapshotSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
