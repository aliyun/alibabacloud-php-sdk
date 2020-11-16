<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBClusterPerformanceResponse\performanceKeys;
use AlibabaCloud\Tea\Model;

class DescribeDBClusterPerformanceResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var performanceKeys[]
     */
    public $performanceKeys;
    protected $_name = [
        'requestId'       => 'RequestId',
        'DBClusterId'     => 'DBClusterId',
        'startTime'       => 'StartTime',
        'endTime'         => 'EndTime',
        'performanceKeys' => 'PerformanceKeys',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('DBClusterId', $this->DBClusterId, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('endTime', $this->endTime, true);
        Model::validateRequired('performanceKeys', $this->performanceKeys, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->performanceKeys) {
            $res['PerformanceKeys'] = [];
            if (null !== $this->performanceKeys && \is_array($this->performanceKeys)) {
                $n = 0;
                foreach ($this->performanceKeys as $item) {
                    $res['PerformanceKeys'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBClusterPerformanceResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['PerformanceKeys'])) {
            if (!empty($map['PerformanceKeys'])) {
                $model->performanceKeys = [];
                $n                      = 0;
                foreach ($map['PerformanceKeys'] as $item) {
                    $model->performanceKeys[$n++] = null !== $item ? performanceKeys::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
