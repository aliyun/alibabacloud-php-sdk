<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeMetricLastResponseBody\metricTotalModel\metricModelList;

use AlibabaCloud\Tea\Model;

class processLastInfos extends Model
{
    /**
     * @example 50
     *
     * @var float
     */
    public $cpuUsage;

    /**
     * @example 50
     *
     * @var float
     */
    public $memoryUsage;

    /**
     * @example com.offerup
     *
     * @var string
     */
    public $name;

    /**
     * @var int[]
     */
    public $processIds;

    /**
     * @example 1548777660000
     *
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'cpuUsage' => 'CpuUsage',
        'memoryUsage' => 'MemoryUsage',
        'name' => 'Name',
        'processIds' => 'ProcessIds',
        'timestamp' => 'Timestamp',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpuUsage) {
            $res['CpuUsage'] = $this->cpuUsage;
        }
        if (null !== $this->memoryUsage) {
            $res['MemoryUsage'] = $this->memoryUsage;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->processIds) {
            $res['ProcessIds'] = $this->processIds;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return processLastInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CpuUsage'])) {
            $model->cpuUsage = $map['CpuUsage'];
        }
        if (isset($map['MemoryUsage'])) {
            $model->memoryUsage = $map['MemoryUsage'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ProcessIds'])) {
            if (!empty($map['ProcessIds'])) {
                $model->processIds = $map['ProcessIds'];
            }
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
