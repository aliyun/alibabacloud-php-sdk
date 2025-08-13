<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Dara\Model;

class UpdateAuthRuleRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $consoleRuleId;

    /**
     * @var string
     */
    public $eventCode;

    /**
     * @var string
     */
    public $regId;

    /**
     * @var string
     */
    public $ruleActions;

    /**
     * @var string
     */
    public $ruleExpressions;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var int
     */
    public $ruleVersionId;
    protected $_name = [
        'lang' => 'Lang',
        'consoleRuleId' => 'consoleRuleId',
        'eventCode' => 'eventCode',
        'regId' => 'regId',
        'ruleActions' => 'ruleActions',
        'ruleExpressions' => 'ruleExpressions',
        'ruleId' => 'ruleId',
        'ruleVersionId' => 'ruleVersionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->consoleRuleId) {
            $res['consoleRuleId'] = $this->consoleRuleId;
        }

        if (null !== $this->eventCode) {
            $res['eventCode'] = $this->eventCode;
        }

        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
        }

        if (null !== $this->ruleActions) {
            $res['ruleActions'] = $this->ruleActions;
        }

        if (null !== $this->ruleExpressions) {
            $res['ruleExpressions'] = $this->ruleExpressions;
        }

        if (null !== $this->ruleId) {
            $res['ruleId'] = $this->ruleId;
        }

        if (null !== $this->ruleVersionId) {
            $res['ruleVersionId'] = $this->ruleVersionId;
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['consoleRuleId'])) {
            $model->consoleRuleId = $map['consoleRuleId'];
        }

        if (isset($map['eventCode'])) {
            $model->eventCode = $map['eventCode'];
        }

        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }

        if (isset($map['ruleActions'])) {
            $model->ruleActions = $map['ruleActions'];
        }

        if (isset($map['ruleExpressions'])) {
            $model->ruleExpressions = $map['ruleExpressions'];
        }

        if (isset($map['ruleId'])) {
            $model->ruleId = $map['ruleId'];
        }

        if (isset($map['ruleVersionId'])) {
            $model->ruleVersionId = $map['ruleVersionId'];
        }

        return $model;
    }
}
