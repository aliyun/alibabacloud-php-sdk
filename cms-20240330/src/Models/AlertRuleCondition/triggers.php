<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\AlertRuleCondition;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\AlertRuleCondition\triggers\expression;

class triggers extends Model
{
    /**
     * @var int
     */
    public $durationSecs;

    /**
     * @var expression
     */
    public $expression;

    /**
     * @var string
     */
    public $severity;
    protected $_name = [
        'durationSecs' => 'durationSecs',
        'expression' => 'expression',
        'severity' => 'severity',
    ];

    public function validate()
    {
        if (null !== $this->expression) {
            $this->expression->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->durationSecs) {
            $res['durationSecs'] = $this->durationSecs;
        }

        if (null !== $this->expression) {
            $res['expression'] = null !== $this->expression ? $this->expression->toArray($noStream) : $this->expression;
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
        if (isset($map['durationSecs'])) {
            $model->durationSecs = $map['durationSecs'];
        }

        if (isset($map['expression'])) {
            $model->expression = expression::fromMap($map['expression']);
        }

        if (isset($map['severity'])) {
            $model->severity = $map['severity'];
        }

        return $model;
    }
}
