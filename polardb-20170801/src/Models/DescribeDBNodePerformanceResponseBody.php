<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBNodePerformanceResponseBody\performanceKeys;
use AlibabaCloud\Tea\Model;

class DescribeDBNodePerformanceResponseBody extends Model
{
    /**
     * @var string
     */
    public $DBNodeId;

    /**
     * @var string
     */
    public $DBType;

    /**
     * @var string
     */
    public $DBVersion;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var performanceKeys
     */
    public $performanceKeys;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'DBNodeId'        => 'DBNodeId',
        'DBType'          => 'DBType',
        'DBVersion'       => 'DBVersion',
        'endTime'         => 'EndTime',
        'performanceKeys' => 'PerformanceKeys',
        'requestId'       => 'RequestId',
        'startTime'       => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBNodeId) {
            $res['DBNodeId'] = $this->DBNodeId;
        }
        if (null !== $this->DBType) {
            $res['DBType'] = $this->DBType;
        }
        if (null !== $this->DBVersion) {
            $res['DBVersion'] = $this->DBVersion;
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
     * @return DescribeDBNodePerformanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBNodeId'])) {
            $model->DBNodeId = $map['DBNodeId'];
        }
        if (isset($map['DBType'])) {
            $model->DBType = $map['DBType'];
        }
        if (isset($map['DBVersion'])) {
            $model->DBVersion = $map['DBVersion'];
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
