<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeAddonMetricsResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeAddonMetricsResponseBody\data\metrics\labels;

class metrics extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var labels[]
     */
    public $labels;

    /**
     * @var string
     */
    public $metric;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $unit;
    protected $_name = [
        'description' => 'Description',
        'labels' => 'Labels',
        'metric' => 'Metric',
        'type' => 'Type',
        'unit' => 'Unit',
    ];

    public function validate()
    {
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->labels) {
            if (\is_array($this->labels)) {
                $res['Labels'] = [];
                $n1 = 0;
                foreach ($this->labels as $item1) {
                    $res['Labels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->metric) {
            $res['Metric'] = $this->metric;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n1 = 0;
                foreach ($map['Labels'] as $item1) {
                    $model->labels[$n1] = labels::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Metric'])) {
            $model->metric = $map['Metric'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }

        return $model;
    }
}
