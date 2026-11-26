<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class RLMetricScalar extends Model
{
    /**
     * @var string
     */
    public $gmtTime;

    /**
     * @var string
     */
    public $metricName;

    /**
     * @var int
     */
    public $step;

    /**
     * @var float
     */
    public $value;
    protected $_name = [
        'gmtTime' => 'GmtTime',
        'metricName' => 'MetricName',
        'step' => 'Step',
        'value' => 'Value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gmtTime) {
            $res['GmtTime'] = $this->gmtTime;
        }

        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }

        if (null !== $this->step) {
            $res['Step'] = $this->step;
        }

        if (null !== $this->value) {
            $res['Value'] = $this->value;
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
        if (isset($map['GmtTime'])) {
            $model->gmtTime = $map['GmtTime'];
        }

        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }

        if (isset($map['Step'])) {
            $model->step = $map['Step'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
