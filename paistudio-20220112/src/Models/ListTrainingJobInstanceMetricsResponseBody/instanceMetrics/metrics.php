<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListTrainingJobInstanceMetricsResponseBody\instanceMetrics;

use AlibabaCloud\Tea\Model;

class metrics extends Model
{
    /**
     * @var string
     */
    public $time;

    /**
     * @var float
     */
    public $value;
    protected $_name = [
        'time'  => 'Time',
        'value' => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metrics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
