<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeJobResourceUsageResponseBody;

use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeJobResourceUsageResponseBody\data\jobAcuUsage;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example amv-clusterxxx
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @example 2023-05-23T16:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @var jobAcuUsage[]
     */
    public $jobAcuUsage;

    /**
     * @example 2023-05-22T16:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'endTime'     => 'EndTime',
        'jobAcuUsage' => 'JobAcuUsage',
        'startTime'   => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->jobAcuUsage) {
            $res['JobAcuUsage'] = [];
            if (null !== $this->jobAcuUsage && \is_array($this->jobAcuUsage)) {
                $n = 0;
                foreach ($this->jobAcuUsage as $item) {
                    $res['JobAcuUsage'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['JobAcuUsage'])) {
            if (!empty($map['JobAcuUsage'])) {
                $model->jobAcuUsage = [];
                $n                  = 0;
                foreach ($map['JobAcuUsage'] as $item) {
                    $model->jobAcuUsage[$n++] = null !== $item ? jobAcuUsage::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
