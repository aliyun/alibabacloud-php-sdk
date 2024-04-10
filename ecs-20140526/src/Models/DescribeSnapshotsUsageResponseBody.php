<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class DescribeSnapshotsUsageResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of snapshots stored in the current region.
     *
     * @example 5
     *
     * @var int
     */
    public $snapshotCount;

    /**
     * @description The total size of snapshots stored in the current region. Unit: bytes.
     *
     * @example 122
     *
     * @var int
     */
    public $snapshotSize;
    protected $_name = [
        'requestId'     => 'RequestId',
        'snapshotCount' => 'SnapshotCount',
        'snapshotSize'  => 'SnapshotSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->snapshotCount) {
            $res['SnapshotCount'] = $this->snapshotCount;
        }
        if (null !== $this->snapshotSize) {
            $res['SnapshotSize'] = $this->snapshotSize;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SnapshotCount'])) {
            $model->snapshotCount = $map['SnapshotCount'];
        }
        if (isset($map['SnapshotSize'])) {
            $model->snapshotSize = $map['SnapshotSize'];
        }

        return $model;
    }
}
