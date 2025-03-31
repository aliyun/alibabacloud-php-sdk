<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models\DescribeJobMetricLastResponseBody;

use AlibabaCloud\Dara\Model;

class metrics extends Model
{
    /**
     * @var int
     */
    public $arrayIndex;

    /**
     * @var string
     */
    public $metric;
    protected $_name = [
        'arrayIndex' => 'ArrayIndex',
        'metric' => 'Metric',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->arrayIndex) {
            $res['ArrayIndex'] = $this->arrayIndex;
        }

        if (null !== $this->metric) {
            $res['Metric'] = $this->metric;
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
        if (isset($map['ArrayIndex'])) {
            $model->arrayIndex = $map['ArrayIndex'];
        }

        if (isset($map['Metric'])) {
            $model->metric = $map['Metric'];
        }

        return $model;
    }
}
