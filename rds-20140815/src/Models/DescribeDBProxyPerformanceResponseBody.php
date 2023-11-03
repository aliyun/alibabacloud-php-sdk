<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyPerformanceResponseBody\performanceKeys;
use AlibabaCloud\Tea\Model;

class DescribeDBProxyPerformanceResponseBody extends Model
{
    /**
     * @description The instance ID.
     *
     * @example lsmexxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description An internal parameter. You do not need to specify this parameter.
     *
     * @example normal
     *
     * @var string
     */
    public $DBProxyEngineType;

    /**
     * @description The end time of the query.
     *
     * @example 2019-09-21T18:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The performance list.
     *
     * @var performanceKeys
     */
    public $performanceKeys;

    /**
     * @description The request ID.
     *
     * @example DD31056F-A0CE-41D7-AD39-689B6ABAE982
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The start time of the query.
     *
     * @example 2019-09-19T01:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'DBInstanceId'      => 'DBInstanceId',
        'DBProxyEngineType' => 'DBProxyEngineType',
        'endTime'           => 'EndTime',
        'performanceKeys'   => 'PerformanceKeys',
        'requestId'         => 'RequestId',
        'startTime'         => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBProxyEngineType) {
            $res['DBProxyEngineType'] = $this->DBProxyEngineType;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->performanceKeys) {
            $res['PerformanceKeys'] = null !== $this->performanceKeys ? $this->performanceKeys->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBProxyPerformanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBProxyEngineType'])) {
            $model->DBProxyEngineType = $map['DBProxyEngineType'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['PerformanceKeys'])) {
            $model->performanceKeys = performanceKeys::fromMap($map['PerformanceKeys']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
