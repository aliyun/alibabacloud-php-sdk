<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\DescribeMetricListResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $labels;

    /**
     * @var string
     */
    public $metricName;

    /**
     * @var string[][]
     */
    public $values;
    protected $_name = [
        'labels' => 'labels',
        'metricName' => 'metricName',
        'values' => 'values',
    ];

    public function validate()
    {
        if (\is_array($this->values)) {
            Model::validateArray($this->values);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->labels) {
            $res['labels'] = $this->labels;
        }

        if (null !== $this->metricName) {
            $res['metricName'] = $this->metricName;
        }

        if (null !== $this->values) {
            if (\is_array($this->values)) {
                $res['values'] = [];
                $n1 = 0;
                foreach ($this->values as $item1) {
                    if (\is_array($item1)) {
                        $res['values'][$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $res['values'][$n1][$n2] = $item2;
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
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
        if (isset($map['labels'])) {
            $model->labels = $map['labels'];
        }

        if (isset($map['metricName'])) {
            $model->metricName = $map['metricName'];
        }

        if (isset($map['values'])) {
            if (!empty($map['values'])) {
                $model->values = [];
                $n1 = 0;
                foreach ($map['values'] as $item1) {
                    if (!empty($item1)) {
                        $model->values[$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $model->values[$n1][$n2] = $item2;
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
