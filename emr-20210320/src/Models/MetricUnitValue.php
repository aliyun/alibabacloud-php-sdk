<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class MetricUnitValue extends Model
{
    /**
     * @description 指标名称。
     *
     * @var string
     */
    public $metricName;

    /**
     * @description 指标单位。
     *
     * @var string
     */
    public $metricUnit;
    protected $_name = [
        'metricName' => 'MetricName',
        'metricUnit' => 'MetricUnit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->metricUnit) {
            $res['MetricUnit'] = $this->metricUnit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MetricUnitValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['MetricUnit'])) {
            $model->metricUnit = $map['MetricUnit'];
        }

        return $model;
    }
}
