<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Dara\Model;

class MetricStat extends Model
{
    /**
     * @var string[]
     */
    public $associated;

    /**
     * @var Dimension[]
     */
    public $dimensions;

    /**
     * @var int
     */
    public $logTime;

    /**
     * @var mixed[]
     */
    public $measurements;

    /**
     * @var string
     */
    public $metric;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var int
     */
    public $period;

    /**
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'associated' => 'Associated',
        'dimensions' => 'Dimensions',
        'logTime' => 'LogTime',
        'measurements' => 'Measurements',
        'metric' => 'Metric',
        'namespace' => 'Namespace',
        'period' => 'Period',
        'timestamp' => 'Timestamp',
    ];

    public function validate()
    {
        if (\is_array($this->associated)) {
            Model::validateArray($this->associated);
        }
        if (\is_array($this->dimensions)) {
            Model::validateArray($this->dimensions);
        }
        if (\is_array($this->measurements)) {
            Model::validateArray($this->measurements);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->associated) {
            if (\is_array($this->associated)) {
                $res['Associated'] = [];
                foreach ($this->associated as $key1 => $value1) {
                    $res['Associated'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->dimensions) {
            if (\is_array($this->dimensions)) {
                $res['Dimensions'] = [];
                $n1 = 0;
                foreach ($this->dimensions as $item1) {
                    $res['Dimensions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->logTime) {
            $res['LogTime'] = $this->logTime;
        }

        if (null !== $this->measurements) {
            if (\is_array($this->measurements)) {
                $res['Measurements'] = [];
                foreach ($this->measurements as $key1 => $value1) {
                    $res['Measurements'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->metric) {
            $res['Metric'] = $this->metric;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->period) {
            $res['Period'] = $this->period;
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
        if (isset($map['Associated'])) {
            if (!empty($map['Associated'])) {
                $model->associated = [];
                foreach ($map['Associated'] as $key1 => $value1) {
                    $model->associated[$key1] = $value1;
                }
            }
        }

        if (isset($map['Dimensions'])) {
            if (!empty($map['Dimensions'])) {
                $model->dimensions = [];
                $n1 = 0;
                foreach ($map['Dimensions'] as $item1) {
                    $model->dimensions[$n1] = Dimension::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['LogTime'])) {
            $model->logTime = $map['LogTime'];
        }

        if (isset($map['Measurements'])) {
            if (!empty($map['Measurements'])) {
                $model->measurements = [];
                foreach ($map['Measurements'] as $key1 => $value1) {
                    $model->measurements[$key1] = $value1;
                }
            }
        }

        if (isset($map['Metric'])) {
            $model->metric = $map['Metric'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
