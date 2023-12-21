<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Tea\Model;

class ExperimentReportValue extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $baseline;

    /**
     * @var mixed[][]
     */
    public $metricResults;
    protected $_name = [
        'baseline'      => 'Baseline',
        'metricResults' => 'MetricResults',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baseline) {
            $res['Baseline'] = $this->baseline;
        }
        if (null !== $this->metricResults) {
            $res['MetricResults'] = $this->metricResults;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExperimentReportValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Baseline'])) {
            $model->baseline = $map['Baseline'];
        }
        if (isset($map['MetricResults'])) {
            $model->metricResults = $map['MetricResults'];
        }

        return $model;
    }
}
