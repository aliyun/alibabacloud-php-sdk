<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainSnapshotDataResponseBody\snapshotDataPerInterval;

class DescribeVsDomainSnapshotDataResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var snapshotDataPerInterval
     */
    public $snapshotDataPerInterval;
    protected $_name = [
        'requestId' => 'RequestId',
        'snapshotDataPerInterval' => 'SnapshotDataPerInterval',
    ];

    public function validate()
    {
        if (null !== $this->snapshotDataPerInterval) {
            $this->snapshotDataPerInterval->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->snapshotDataPerInterval) {
            $res['SnapshotDataPerInterval'] = null !== $this->snapshotDataPerInterval ? $this->snapshotDataPerInterval->toArray($noStream) : $this->snapshotDataPerInterval;
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

        if (isset($map['SnapshotDataPerInterval'])) {
            $model->snapshotDataPerInterval = snapshotDataPerInterval::fromMap($map['SnapshotDataPerInterval']);
        }

        return $model;
    }
}
