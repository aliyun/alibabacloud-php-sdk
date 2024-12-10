<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\SDK\Adb\V20211201\Models\DescribePatternPerformanceResponseBody\performances;
use AlibabaCloud\Tea\Model;

class DescribePatternPerformanceResponseBody extends Model
{
    /**
     * @var string
     */
    public $accessIp;

    /**
     * @description The end time of the query. The time follows the ISO 8601 standard in the *yyyy-MM-ddTHH:mmZ* format. The time is displayed in UTC.
     *
     * @example 2022-08-22T01:06:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $failedCount;

    /**
     * @description The queried performance metrics.
     *
     * @var performances[]
     */
    public $performances;

    /**
     * @var int
     */
    public $queryCount;

    /**
     * @description The request ID.
     *
     * @example F21AF487-B8C9-57E0-8E3A-A92BC3611FB6
     *
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $SQLPattern;

    /**
     * @description The start time of the query. The time follows the ISO 8601 standard in the *yyyy-MM-ddTHH:mmZ* format. The time is displayed in UTC.
     *
     * @example 2022-08-21T02:15:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $tables;

    /**
     * @var string
     */
    public $user;
    protected $_name = [
        'accessIp'     => 'AccessIp',
        'endTime'      => 'EndTime',
        'failedCount'  => 'FailedCount',
        'performances' => 'Performances',
        'queryCount'   => 'QueryCount',
        'requestId'    => 'RequestId',
        'SQLPattern'   => 'SQLPattern',
        'startTime'    => 'StartTime',
        'tables'       => 'Tables',
        'user'         => 'User',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessIp) {
            $res['AccessIp'] = $this->accessIp;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->failedCount) {
            $res['FailedCount'] = $this->failedCount;
        }
        if (null !== $this->performances) {
            $res['Performances'] = [];
            if (null !== $this->performances && \is_array($this->performances)) {
                $n = 0;
                foreach ($this->performances as $item) {
                    $res['Performances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->queryCount) {
            $res['QueryCount'] = $this->queryCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->SQLPattern) {
            $res['SQLPattern'] = $this->SQLPattern;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->tables) {
            $res['Tables'] = $this->tables;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePatternPerformanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessIp'])) {
            $model->accessIp = $map['AccessIp'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['FailedCount'])) {
            $model->failedCount = $map['FailedCount'];
        }
        if (isset($map['Performances'])) {
            if (!empty($map['Performances'])) {
                $model->performances = [];
                $n                   = 0;
                foreach ($map['Performances'] as $item) {
                    $model->performances[$n++] = null !== $item ? performances::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['QueryCount'])) {
            $model->queryCount = $map['QueryCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SQLPattern'])) {
            $model->SQLPattern = $map['SQLPattern'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Tables'])) {
            $model->tables = $map['Tables'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        return $model;
    }
}
