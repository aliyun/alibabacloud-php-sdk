<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainSnapshotDataResponseBody\snapshotDataPerInterval;
use AlibabaCloud\Tea\Model;

class DescribeVsDomainSnapshotDataResponseBody extends Model
{
    /**
     * @example BEA5625F-8FCF-48F4-851B-CA63946DA664
     *
     * @var string
     */
    public $requestId;

    /**
     * @var snapshotDataPerInterval
     */
    public $snapshotDataPerInterval;
    protected $_name = [
        'requestId'               => 'RequestId',
        'snapshotDataPerInterval' => 'SnapshotDataPerInterval',
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
        if (null !== $this->snapshotDataPerInterval) {
            $res['SnapshotDataPerInterval'] = null !== $this->snapshotDataPerInterval ? $this->snapshotDataPerInterval->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVsDomainSnapshotDataResponseBody
     */
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
