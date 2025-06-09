<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class SeverityConfiguration extends Model
{
    /**
     * @var ConditionConfiguration
     */
    public $evalCondition;

    /**
     * @var int
     */
    public $severity;
    protected $_name = [
        'evalCondition' => 'evalCondition',
        'severity' => 'severity',
    ];

    public function validate()
    {
        if (null !== $this->evalCondition) {
            $this->evalCondition->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->evalCondition) {
            $res['evalCondition'] = null !== $this->evalCondition ? $this->evalCondition->toArray($noStream) : $this->evalCondition;
        }

        if (null !== $this->severity) {
            $res['severity'] = $this->severity;
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
        if (isset($map['evalCondition'])) {
            $model->evalCondition = ConditionConfiguration::fromMap($map['evalCondition']);
        }

        if (isset($map['severity'])) {
            $model->severity = $map['severity'];
        }

        return $model;
    }
}
