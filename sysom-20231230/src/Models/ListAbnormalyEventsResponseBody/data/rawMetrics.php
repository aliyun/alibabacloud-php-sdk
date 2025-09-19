<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\ListAbnormalyEventsResponseBody\data;

use AlibabaCloud\Dara\Model;

class rawMetrics extends Model
{
    /**
     * @var float
     */
    public $endTime;

    /**
     * @var string[]
     */
    public $metrics;

    /**
     * @var float
     */
    public $startTime;
    protected $_name = [
        'endTime' => 'end_time',
        'metrics' => 'metrics',
        'startTime' => 'start_time',
    ];

    public function validate()
    {
        if (\is_array($this->metrics)) {
            Model::validateArray($this->metrics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['end_time'] = $this->endTime;
        }

        if (null !== $this->metrics) {
            if (\is_array($this->metrics)) {
                $res['metrics'] = [];
                $n1 = 0;
                foreach ($this->metrics as $item1) {
                    $res['metrics'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->startTime) {
            $res['start_time'] = $this->startTime;
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
        if (isset($map['end_time'])) {
            $model->endTime = $map['end_time'];
        }

        if (isset($map['metrics'])) {
            if (!empty($map['metrics'])) {
                $model->metrics = [];
                $n1 = 0;
                foreach ($map['metrics'] as $item1) {
                    $model->metrics[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['start_time'])) {
            $model->startTime = $map['start_time'];
        }

        return $model;
    }
}
