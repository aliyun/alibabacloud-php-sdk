<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Dara\Model;

class CursorRequest extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var Matcher[]
     */
    public $matchers;

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
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime' => 'EndTime',
        'matchers' => 'Matchers',
        'metric' => 'Metric',
        'namespace' => 'Namespace',
        'period' => 'Period',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        if (\is_array($this->matchers)) {
            Model::validateArray($this->matchers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->matchers) {
            if (\is_array($this->matchers)) {
                $res['Matchers'] = [];
                $n1 = 0;
                foreach ($this->matchers as $item1) {
                    $res['Matchers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Matchers'])) {
            if (!empty($map['Matchers'])) {
                $model->matchers = [];
                $n1 = 0;
                foreach ($map['Matchers'] as $item1) {
                    $model->matchers[$n1] = Matcher::fromMap($item1);
                    ++$n1;
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

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
