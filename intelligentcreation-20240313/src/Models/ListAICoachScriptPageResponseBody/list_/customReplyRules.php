<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListAICoachScriptPageResponseBody\list_;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListAICoachScriptPageResponseBody\list_\customReplyRules\action;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListAICoachScriptPageResponseBody\list_\customReplyRules\mainCondition;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListAICoachScriptPageResponseBody\list_\customReplyRules\subCondition;

class customReplyRules extends Model
{
    /**
     * @var action
     */
    public $action;

    /**
     * @var string
     */
    public $logic;

    /**
     * @var mainCondition
     */
    public $mainCondition;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var int
     */
    public $sortNo;

    /**
     * @var subCondition
     */
    public $subCondition;
    protected $_name = [
        'action' => 'action',
        'logic' => 'logic',
        'mainCondition' => 'mainCondition',
        'priority' => 'priority',
        'sortNo' => 'sortNo',
        'subCondition' => 'subCondition',
    ];

    public function validate()
    {
        if (null !== $this->action) {
            $this->action->validate();
        }
        if (null !== $this->mainCondition) {
            $this->mainCondition->validate();
        }
        if (null !== $this->subCondition) {
            $this->subCondition->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            $res['action'] = null !== $this->action ? $this->action->toArray($noStream) : $this->action;
        }

        if (null !== $this->logic) {
            $res['logic'] = $this->logic;
        }

        if (null !== $this->mainCondition) {
            $res['mainCondition'] = null !== $this->mainCondition ? $this->mainCondition->toArray($noStream) : $this->mainCondition;
        }

        if (null !== $this->priority) {
            $res['priority'] = $this->priority;
        }

        if (null !== $this->sortNo) {
            $res['sortNo'] = $this->sortNo;
        }

        if (null !== $this->subCondition) {
            $res['subCondition'] = null !== $this->subCondition ? $this->subCondition->toArray($noStream) : $this->subCondition;
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
        if (isset($map['action'])) {
            $model->action = action::fromMap($map['action']);
        }

        if (isset($map['logic'])) {
            $model->logic = $map['logic'];
        }

        if (isset($map['mainCondition'])) {
            $model->mainCondition = mainCondition::fromMap($map['mainCondition']);
        }

        if (isset($map['priority'])) {
            $model->priority = $map['priority'];
        }

        if (isset($map['sortNo'])) {
            $model->sortNo = $map['sortNo'];
        }

        if (isset($map['subCondition'])) {
            $model->subCondition = subCondition::fromMap($map['subCondition']);
        }

        return $model;
    }
}
