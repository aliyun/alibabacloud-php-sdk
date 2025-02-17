<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;

class DescribeSnapshotsUsageResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int
     */
    public $snapshotCount;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
