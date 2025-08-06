<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeMetricLastResponseBody\metricTotalModel\metricModelList;

use AlibabaCloud\Dara\Model;

class processLastInfos extends Model
{
    /**
     * @var float
     */
    public $cpuUsage;

    /**
     * @var float
     */
    public $memoryUsage;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int[]
     */
    public $processIds;

    /**
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

    public function validate()
    {
        if (\is_array($this->processIds)) {
            Model::validateArray($this->processIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->processIds)) {
                $res['ProcessIds'] = [];
                $n1 = 0;
                foreach ($this->processIds as $item1) {
                    $res['ProcessIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
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
                $model->processIds = [];
                $n1 = 0;
                foreach ($map['ProcessIds'] as $item1) {
                    $model->processIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
