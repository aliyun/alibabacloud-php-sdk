<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\AlertRuleCondition;

use AlibabaCloud\Dara\Model;

class caseList extends Model
{
    /**
     * @var string
     */
    public $condition;

    /**
     * @var string
     */
    public $countCondition;

    /**
     * @var string
     */
    public $level;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'condition' => 'condition',
        'countCondition' => 'countCondition',
        'level' => 'level',
        'type' => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->condition) {
            $res['condition'] = $this->condition;
        }

        if (null !== $this->countCondition) {
            $res['countCondition'] = $this->countCondition;
        }

        if (null !== $this->level) {
            $res['level'] = $this->level;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['condition'])) {
            $model->condition = $map['condition'];
        }

        if (isset($map['countCondition'])) {
            $model->countCondition = $map['countCondition'];
        }

        if (isset($map['level'])) {
            $model->level = $map['level'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
