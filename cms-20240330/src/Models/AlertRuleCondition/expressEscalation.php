<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\AlertRuleCondition;

use AlibabaCloud\Dara\Model;

class expressEscalation extends Model
{
    /**
     * @var string
     */
    public $level;

    /**
     * @var string
     */
    public $rawExpression;

    /**
     * @var int
     */
    public $times;
    protected $_name = [
        'level' => 'level',
        'rawExpression' => 'rawExpression',
        'times' => 'times',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->level) {
            $res['level'] = $this->level;
        }

        if (null !== $this->rawExpression) {
            $res['rawExpression'] = $this->rawExpression;
        }

        if (null !== $this->times) {
            $res['times'] = $this->times;
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
        if (isset($map['level'])) {
            $model->level = $map['level'];
        }

        if (isset($map['rawExpression'])) {
            $model->rawExpression = $map['rawExpression'];
        }

        if (isset($map['times'])) {
            $model->times = $map['times'];
        }

        return $model;
    }
}
