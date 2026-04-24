<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\DescribeMetricMetaListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\DescribeMetricMetaListResponseBody\resources\dimensionDescription;

class resources extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var dimensionDescription[]
     */
    public $dimensionDescription;

    /**
     * @var string[]
     */
    public $dimensions;

    /**
     * @var string[]
     */
    public $labels;

    /**
     * @var string
     */
    public $metricName;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $periods;

    /**
     * @var string
     */
    public $statistics;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $unit;
    protected $_name = [
        'description' => 'description',
        'dimensionDescription' => 'dimensionDescription',
        'dimensions' => 'dimensions',
        'labels' => 'labels',
        'metricName' => 'metricName',
        'namespace' => 'namespace',
        'periods' => 'periods',
        'statistics' => 'statistics',
        'type' => 'type',
        'unit' => 'unit',
    ];

    public function validate()
    {
        if (\is_array($this->dimensionDescription)) {
            Model::validateArray($this->dimensionDescription);
        }
        if (\is_array($this->dimensions)) {
            Model::validateArray($this->dimensions);
        }
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->dimensionDescription) {
            if (\is_array($this->dimensionDescription)) {
                $res['dimensionDescription'] = [];
                $n1 = 0;
                foreach ($this->dimensionDescription as $item1) {
                    $res['dimensionDescription'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dimensions) {
            if (\is_array($this->dimensions)) {
                $res['dimensions'] = [];
                $n1 = 0;
                foreach ($this->dimensions as $item1) {
                    $res['dimensions'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->labels) {
            if (\is_array($this->labels)) {
                $res['labels'] = [];
                foreach ($this->labels as $key1 => $value1) {
                    $res['labels'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->metricName) {
            $res['metricName'] = $this->metricName;
        }

        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }

        if (null !== $this->periods) {
            $res['periods'] = $this->periods;
        }

        if (null !== $this->statistics) {
            $res['statistics'] = $this->statistics;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->unit) {
            $res['unit'] = $this->unit;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['dimensionDescription'])) {
            if (!empty($map['dimensionDescription'])) {
                $model->dimensionDescription = [];
                $n1 = 0;
                foreach ($map['dimensionDescription'] as $item1) {
                    $model->dimensionDescription[$n1] = dimensionDescription::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['dimensions'])) {
            if (!empty($map['dimensions'])) {
                $model->dimensions = [];
                $n1 = 0;
                foreach ($map['dimensions'] as $item1) {
                    $model->dimensions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['labels'])) {
            if (!empty($map['labels'])) {
                $model->labels = [];
                foreach ($map['labels'] as $key1 => $value1) {
                    $model->labels[$key1] = $value1;
                }
            }
        }

        if (isset($map['metricName'])) {
            $model->metricName = $map['metricName'];
        }

        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }

        if (isset($map['periods'])) {
            $model->periods = $map['periods'];
        }

        if (isset($map['statistics'])) {
            $model->statistics = $map['statistics'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['unit'])) {
            $model->unit = $map['unit'];
        }

        return $model;
    }
}
