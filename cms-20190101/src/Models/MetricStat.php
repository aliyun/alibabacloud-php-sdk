<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

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
        'associated'   => 'Associated',
        'dimensions'   => 'Dimensions',
        'logTime'      => 'LogTime',
        'measurements' => 'Measurements',
        'metric'       => 'Metric',
        'namespace'    => 'Namespace',
        'period'       => 'Period',
        'timestamp'    => 'Timestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->associated) {
            $res['Associated'] = $this->associated;
        }
        if (null !== $this->dimensions) {
            $res['Dimensions'] = [];
            if (null !== $this->dimensions && \is_array($this->dimensions)) {
                $n = 0;
                foreach ($this->dimensions as $item) {
                    $res['Dimensions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->logTime) {
            $res['LogTime'] = $this->logTime;
        }
        if (null !== $this->measurements) {
            $res['Measurements'] = $this->measurements;
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

    /**
     * @param array $map
     *
     * @return MetricStat
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Associated'])) {
            $model->associated = $map['Associated'];
        }
        if (isset($map['Dimensions'])) {
            if (!empty($map['Dimensions'])) {
                $model->dimensions = [];
                $n                 = 0;
                foreach ($map['Dimensions'] as $item) {
                    $model->dimensions[$n++] = null !== $item ? Dimension::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['LogTime'])) {
            $model->logTime = $map['LogTime'];
        }
        if (isset($map['Measurements'])) {
            $model->measurements = $map['Measurements'];
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
