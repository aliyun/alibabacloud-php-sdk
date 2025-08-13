<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Dara\Model;

class UpdateRuleRequest extends Model
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
    public $logicExpression;

    /**
     * @var string
     */
    public $memo;

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
    public $ruleBody;

    /**
     * @var string
     */
    public $ruleExpressions;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var string
     */
    public $ruleStatus;

    /**
     * @var string
     */
    public $ruleType;

    /**
     * @var int
     */
    public $ruleVersionId;
    protected $_name = [
        'lang' => 'Lang',
        'consoleRuleId' => 'consoleRuleId',
        'eventCode' => 'eventCode',
        'logicExpression' => 'logicExpression',
        'memo' => 'memo',
        'regId' => 'regId',
        'ruleActions' => 'ruleActions',
        'ruleBody' => 'ruleBody',
        'ruleExpressions' => 'ruleExpressions',
        'ruleId' => 'ruleId',
        'ruleName' => 'ruleName',
        'ruleStatus' => 'ruleStatus',
        'ruleType' => 'ruleType',
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

        if (null !== $this->logicExpression) {
            $res['logicExpression'] = $this->logicExpression;
        }

        if (null !== $this->memo) {
            $res['memo'] = $this->memo;
        }

        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
        }

        if (null !== $this->ruleActions) {
            $res['ruleActions'] = $this->ruleActions;
        }

        if (null !== $this->ruleBody) {
            $res['ruleBody'] = $this->ruleBody;
        }

        if (null !== $this->ruleExpressions) {
            $res['ruleExpressions'] = $this->ruleExpressions;
        }

        if (null !== $this->ruleId) {
            $res['ruleId'] = $this->ruleId;
        }

        if (null !== $this->ruleName) {
            $res['ruleName'] = $this->ruleName;
        }

        if (null !== $this->ruleStatus) {
            $res['ruleStatus'] = $this->ruleStatus;
        }

        if (null !== $this->ruleType) {
            $res['ruleType'] = $this->ruleType;
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

        if (isset($map['logicExpression'])) {
            $model->logicExpression = $map['logicExpression'];
        }

        if (isset($map['memo'])) {
            $model->memo = $map['memo'];
        }

        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }

        if (isset($map['ruleActions'])) {
            $model->ruleActions = $map['ruleActions'];
        }

        if (isset($map['ruleBody'])) {
            $model->ruleBody = $map['ruleBody'];
        }

        if (isset($map['ruleExpressions'])) {
            $model->ruleExpressions = $map['ruleExpressions'];
        }

        if (isset($map['ruleId'])) {
            $model->ruleId = $map['ruleId'];
        }

        if (isset($map['ruleName'])) {
            $model->ruleName = $map['ruleName'];
        }

        if (isset($map['ruleStatus'])) {
            $model->ruleStatus = $map['ruleStatus'];
        }

        if (isset($map['ruleType'])) {
            $model->ruleType = $map['ruleType'];
        }

        if (isset($map['ruleVersionId'])) {
            $model->ruleVersionId = $map['ruleVersionId'];
        }

        return $model;
    }
}
