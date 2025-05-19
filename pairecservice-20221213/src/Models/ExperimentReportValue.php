<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;

class ExperimentReportValue extends Model
{
    /**
     * @var bool
     */
    public $baseline;

    /**
     * @var mixed[][]
     */
    public $metricResults;
    protected $_name = [
        'baseline' => 'Baseline',
        'metricResults' => 'MetricResults',
    ];

    public function validate()
    {
        if (\is_array($this->metricResults)) {
            Model::validateArray($this->metricResults);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baseline) {
            $res['Baseline'] = $this->baseline;
        }

        if (null !== $this->metricResults) {
            if (\is_array($this->metricResults)) {
                $res['MetricResults'] = [];
                foreach ($this->metricResults as $key1 => $value1) {
                    $res['MetricResults'][$key1] = $value1;
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
        if (isset($map['Baseline'])) {
            $model->baseline = $map['Baseline'];
        }

        if (isset($map['MetricResults'])) {
            if (!empty($map['MetricResults'])) {
                $model->metricResults = [];
                foreach ($map['MetricResults'] as $key1 => $value1) {
                    $model->metricResults[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
