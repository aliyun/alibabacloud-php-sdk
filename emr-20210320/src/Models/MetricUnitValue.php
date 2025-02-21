<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;

class MetricUnitValue extends Model
{
    /**
     * @var string
     */
    public $metricName;
    /**
     * @var string
     */
    public $metricUnit;
    protected $_name = [
        'metricName' => 'MetricName',
        'metricUnit' => 'MetricUnit',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
