<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateAlertRuleRequest\triggerCondition\extension;

use AlibabaCloud\Tea\Model;

class instanceTransferFluctuate extends Model
{
    /**
     * @description The maximum percentage of fluctuation in the number of auto triggered node instances that are generated in your workspace. Valid values: [1-100].
     *
     * @example 10
     *
     * @var int
     */
    public $percentage;

    /**
     * @description The way in which the number of auto triggered node instances that are generated in your workspace fluctuates. Valid values:
     *
     *   abs: the absolute value. The number of instances increases or decreases.
     *   increase: The number of instances increases.
     *   decrease: The number of instances decreases.
     *
     * @example abs
     *
     * @var string
     */
    public $trend;
    protected $_name = [
        'percentage' => 'Percentage',
        'trend'      => 'Trend',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->percentage) {
            $res['Percentage'] = $this->percentage;
        }
        if (null !== $this->trend) {
            $res['Trend'] = $this->trend;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceTransferFluctuate
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Percentage'])) {
            $model->percentage = $map['Percentage'];
        }
        if (isset($map['Trend'])) {
            $model->trend = $map['Trend'];
        }

        return $model;
    }
}
