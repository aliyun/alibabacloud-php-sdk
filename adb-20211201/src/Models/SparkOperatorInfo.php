<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class SparkOperatorInfo extends Model
{
    /**
     * @var int
     */
    public $metricValue;

    /**
     * @var int[]
     */
    public $operatorName;
    protected $_name = [
        'metricValue'  => 'MetricValue',
        'operatorName' => 'OperatorName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->metricValue) {
            $res['MetricValue'] = $this->metricValue;
        }
        if (null !== $this->operatorName) {
            $res['OperatorName'] = $this->operatorName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SparkOperatorInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MetricValue'])) {
            $model->metricValue = $map['MetricValue'];
        }
        if (isset($map['OperatorName'])) {
            $model->operatorName = $map['OperatorName'];
        }

        return $model;
    }
}
