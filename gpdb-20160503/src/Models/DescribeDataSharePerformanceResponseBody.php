<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDataSharePerformanceResponseBody\performanceKeys;

class DescribeDataSharePerformanceResponseBody extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;
    /**
     * @var string
     */
    public $endTime;
    /**
     * @var performanceKeys[]
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
        'DBClusterId'     => 'DBClusterId',
        'endTime'         => 'EndTime',
        'performanceKeys' => 'PerformanceKeys',
        'requestId'       => 'RequestId',
        'startTime'       => 'StartTime',
    ];

    public function validate()
    {
        if (\is_array($this->performanceKeys)) {
            Model::validateArray($this->performanceKeys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->performanceKeys) {
            if (\is_array($this->performanceKeys)) {
                $res['PerformanceKeys'] = [];
                $n1                     = 0;
                foreach ($this->performanceKeys as $item1) {
                    $res['PerformanceKeys'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['PerformanceKeys'])) {
            if (!empty($map['PerformanceKeys'])) {
                $model->performanceKeys = [];
                $n1                     = 0;
                foreach ($map['PerformanceKeys'] as $item1) {
                    $model->performanceKeys[$n1++] = performanceKeys::fromMap($item1);
                }
            }
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
