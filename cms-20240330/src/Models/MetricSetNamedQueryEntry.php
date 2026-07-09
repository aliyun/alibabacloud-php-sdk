<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class MetricSetNamedQueryEntry extends Model
{
    /**
     * @var UmodelLabelFilter[]
     */
    public $labelFilters;

    /**
     * @var string
     */
    public $metric;

    /**
     * @var string
     */
    public $metricSet;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'labelFilters' => 'labelFilters',
        'metric' => 'metric',
        'metricSet' => 'metricSet',
        'name' => 'name',
    ];

    public function validate()
    {
        if (\is_array($this->labelFilters)) {
            Model::validateArray($this->labelFilters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->labelFilters) {
            if (\is_array($this->labelFilters)) {
                $res['labelFilters'] = [];
                $n1 = 0;
                foreach ($this->labelFilters as $item1) {
                    $res['labelFilters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->metric) {
            $res['metric'] = $this->metric;
        }

        if (null !== $this->metricSet) {
            $res['metricSet'] = $this->metricSet;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (isset($map['labelFilters'])) {
            if (!empty($map['labelFilters'])) {
                $model->labelFilters = [];
                $n1 = 0;
                foreach ($map['labelFilters'] as $item1) {
                    $model->labelFilters[$n1] = UmodelLabelFilter::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['metric'])) {
            $model->metric = $map['metric'];
        }

        if (isset($map['metricSet'])) {
            $model->metricSet = $map['metricSet'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
