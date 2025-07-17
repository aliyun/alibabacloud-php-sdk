<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDataQualityRuleRequest\checkingConfig;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDataQualityRuleRequest\checkingConfig\thresholds\critical;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDataQualityRuleRequest\checkingConfig\thresholds\expected;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDataQualityRuleRequest\checkingConfig\thresholds\warned;
use AlibabaCloud\Tea\Model;

class thresholds extends Model
{
    /**
     * @description The threshold settings for critical alerts.
     *
     * @var critical
     */
    public $critical;

    /**
     * @description The expected threshold setting.
     *
     * @var expected
     */
    public $expected;

    /**
     * @description The threshold settings for normal alerts.
     *
     * @var warned
     */
    public $warned;
    protected $_name = [
        'critical' => 'Critical',
        'expected' => 'Expected',
        'warned' => 'Warned',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->critical) {
            $res['Critical'] = null !== $this->critical ? $this->critical->toMap() : null;
        }
        if (null !== $this->expected) {
            $res['Expected'] = null !== $this->expected ? $this->expected->toMap() : null;
        }
        if (null !== $this->warned) {
            $res['Warned'] = null !== $this->warned ? $this->warned->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return thresholds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Critical'])) {
            $model->critical = critical::fromMap($map['Critical']);
        }
        if (isset($map['Expected'])) {
            $model->expected = expected::fromMap($map['Expected']);
        }
        if (isset($map['Warned'])) {
            $model->warned = warned::fromMap($map['Warned']);
        }

        return $model;
    }
}
