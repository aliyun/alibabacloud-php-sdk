<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDataQualityRuleRequest\checkingConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDataQualityRuleRequest\checkingConfig\thresholds\critical;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDataQualityRuleRequest\checkingConfig\thresholds\expected;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDataQualityRuleRequest\checkingConfig\thresholds\warned;

class thresholds extends Model
{
    /**
     * @var critical
     */
    public $critical;
    /**
     * @var expected
     */
    public $expected;
    /**
     * @var warned
     */
    public $warned;
    protected $_name = [
        'critical' => 'Critical',
        'expected' => 'Expected',
        'warned'   => 'Warned',
    ];

    public function validate()
    {
        if (null !== $this->critical) {
            $this->critical->validate();
        }
        if (null !== $this->expected) {
            $this->expected->validate();
        }
        if (null !== $this->warned) {
            $this->warned->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->critical) {
            $res['Critical'] = null !== $this->critical ? $this->critical->toArray($noStream) : $this->critical;
        }

        if (null !== $this->expected) {
            $res['Expected'] = null !== $this->expected ? $this->expected->toArray($noStream) : $this->expected;
        }

        if (null !== $this->warned) {
            $res['Warned'] = null !== $this->warned ? $this->warned->toArray($noStream) : $this->warned;
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
