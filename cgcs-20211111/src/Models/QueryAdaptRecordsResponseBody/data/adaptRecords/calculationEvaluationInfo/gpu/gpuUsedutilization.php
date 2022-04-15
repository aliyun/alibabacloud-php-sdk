<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models\QueryAdaptRecordsResponseBody\data\adaptRecords\calculationEvaluationInfo\gpu;

use AlibabaCloud\Tea\Model;

class gpuUsedutilization extends Model
{
    /**
     * @var float
     */
    public $average;

    /**
     * @var float
     */
    public $maximum;

    /**
     * @var float
     */
    public $minimum;

    /**
     * @var float
     */
    public $numberOfCores;

    /**
     * @var float
     */
    public $quantile80;
    protected $_name = [
        'average'       => 'Average',
        'maximum'       => 'Maximum',
        'minimum'       => 'Minimum',
        'numberOfCores' => 'NumberOfCores',
        'quantile80'    => 'Quantile80',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->average) {
            $res['Average'] = $this->average;
        }
        if (null !== $this->maximum) {
            $res['Maximum'] = $this->maximum;
        }
        if (null !== $this->minimum) {
            $res['Minimum'] = $this->minimum;
        }
        if (null !== $this->numberOfCores) {
            $res['NumberOfCores'] = $this->numberOfCores;
        }
        if (null !== $this->quantile80) {
            $res['Quantile80'] = $this->quantile80;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return gpuUsedutilization
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Average'])) {
            $model->average = $map['Average'];
        }
        if (isset($map['Maximum'])) {
            $model->maximum = $map['Maximum'];
        }
        if (isset($map['Minimum'])) {
            $model->minimum = $map['Minimum'];
        }
        if (isset($map['NumberOfCores'])) {
            $model->numberOfCores = $map['NumberOfCores'];
        }
        if (isset($map['Quantile80'])) {
            $model->quantile80 = $map['Quantile80'];
        }

        return $model;
    }
}
