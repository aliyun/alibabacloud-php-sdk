<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationScalingRulesResponseBody\data\applicationScalingRules\metric\metricsStatus;

use AlibabaCloud\Tea\Model;

class nextScaleMetrics extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $nextScaleInAverageUtilization;

    /**
     * @var int
     */
    public $nextScaleOutAverageUtilization;
    protected $_name = [
        'name'                           => 'Name',
        'nextScaleInAverageUtilization'  => 'NextScaleInAverageUtilization',
        'nextScaleOutAverageUtilization' => 'NextScaleOutAverageUtilization',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nextScaleInAverageUtilization) {
            $res['NextScaleInAverageUtilization'] = $this->nextScaleInAverageUtilization;
        }
        if (null !== $this->nextScaleOutAverageUtilization) {
            $res['NextScaleOutAverageUtilization'] = $this->nextScaleOutAverageUtilization;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nextScaleMetrics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NextScaleInAverageUtilization'])) {
            $model->nextScaleInAverageUtilization = $map['NextScaleInAverageUtilization'];
        }
        if (isset($map['NextScaleOutAverageUtilization'])) {
            $model->nextScaleOutAverageUtilization = $map['NextScaleOutAverageUtilization'];
        }

        return $model;
    }
}
