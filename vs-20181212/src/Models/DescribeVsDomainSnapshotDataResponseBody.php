<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainSnapshotDataResponseBody\snapshotDataPerInterval;
use AlibabaCloud\Tea\Model;

class DescribeVsDomainSnapshotDataResponseBody extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var snapshotDataPerInterval
     */
    public $snapshotDataPerInterval;
    protected $_name = [
        'endTime'                 => 'EndTime',
        'startTime'               => 'StartTime',
        'requestId'               => 'RequestId',
        'domainName'              => 'DomainName',
        'snapshotDataPerInterval' => 'SnapshotDataPerInterval',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['SnapshotDataPerInterval'])) {
            $model->snapshotDataPerInterval = snapshotDataPerInterval::fromMap($map['SnapshotDataPerInterval']);
        }

        return $model;
    }
}
