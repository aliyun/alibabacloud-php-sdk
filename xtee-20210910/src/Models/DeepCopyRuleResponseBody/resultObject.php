<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DeepCopyRuleResponseBody;

use AlibabaCloud\Dara\Model;

class resultObject extends Model
{
    /**
     * @var bool
     */
    public $batchCopyFlag;

    /**
     * @var int
     */
    public $consoleRuleId;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var int
     */
    public $ruleVersionId;
    protected $_name = [
        'batchCopyFlag' => 'BatchCopyFlag',
        'consoleRuleId' => 'ConsoleRuleId',
        'ruleId' => 'RuleId',
        'ruleVersionId' => 'RuleVersionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->batchCopyFlag) {
            $res['BatchCopyFlag'] = $this->batchCopyFlag;
        }

        if (null !== $this->consoleRuleId) {
            $res['ConsoleRuleId'] = $this->consoleRuleId;
        }

        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        if (null !== $this->ruleVersionId) {
            $res['RuleVersionId'] = $this->ruleVersionId;
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
        if (isset($map['BatchCopyFlag'])) {
            $model->batchCopyFlag = $map['BatchCopyFlag'];
        }

        if (isset($map['ConsoleRuleId'])) {
            $model->consoleRuleId = $map['ConsoleRuleId'];
        }

        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        if (isset($map['RuleVersionId'])) {
            $model->ruleVersionId = $map['RuleVersionId'];
        }

        return $model;
    }
}
