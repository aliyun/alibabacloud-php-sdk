<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class SeverityConfiguration extends Model
{
    /**
     * @var ConditionConfiguration
     */
    public $evalCondition;

    /**
     * @example 8
     *
     * @var int
     */
    public $severity;
    protected $_name = [
        'evalCondition' => 'evalCondition',
        'severity'      => 'severity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->evalCondition) {
            $res['evalCondition'] = null !== $this->evalCondition ? $this->evalCondition->toMap() : null;
        }
        if (null !== $this->severity) {
            $res['severity'] = $this->severity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SeverityConfiguration
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['evalCondition'])) {
            $model->evalCondition = ConditionConfiguration::fromMap($map['evalCondition']);
        }
        if (isset($map['severity'])) {
            $model->severity = $map['severity'];
        }

        return $model;
    }
}
