<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeRuleDetailByRuleIdResponseBody;

use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $bizVersion;

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
    public $eventName;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $logicExpression;

    /**
     * @var string
     */
    public $mainEventCode;

    /**
     * @var string
     */
    public $memo;

    /**
     * @var mixed[]
     */
    public $ruleActionMap;

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
     * @var string
     */
    public $ruleName;

    /**
     * @var string
     */
    public $ruleStatus;

    /**
     * @var int
     */
    public $ruleVersionId;
    protected $_name = [
        'bizVersion'      => 'bizVersion',
        'consoleRuleId'   => 'consoleRuleId',
        'eventCode'       => 'eventCode',
        'eventName'       => 'eventName',
        'gmtCreate'       => 'gmtCreate',
        'gmtModified'     => 'gmtModified',
        'logicExpression' => 'logicExpression',
        'mainEventCode'   => 'mainEventCode',
        'memo'            => 'memo',
        'ruleActionMap'   => 'ruleActionMap',
        'ruleActions'     => 'ruleActions',
        'ruleExpressions' => 'ruleExpressions',
        'ruleId'          => 'ruleId',
        'ruleName'        => 'ruleName',
        'ruleStatus'      => 'ruleStatus',
        'ruleVersionId'   => 'ruleVersionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizVersion) {
            $res['bizVersion'] = $this->bizVersion;
        }
        if (null !== $this->consoleRuleId) {
            $res['consoleRuleId'] = $this->consoleRuleId;
        }
        if (null !== $this->eventCode) {
            $res['eventCode'] = $this->eventCode;
        }
        if (null !== $this->eventName) {
            $res['eventName'] = $this->eventName;
        }
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }
        if (null !== $this->logicExpression) {
            $res['logicExpression'] = $this->logicExpression;
        }
        if (null !== $this->mainEventCode) {
            $res['mainEventCode'] = $this->mainEventCode;
        }
        if (null !== $this->memo) {
            $res['memo'] = $this->memo;
        }
        if (null !== $this->ruleActionMap) {
            $res['ruleActionMap'] = $this->ruleActionMap;
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
        if (null !== $this->ruleName) {
            $res['ruleName'] = $this->ruleName;
        }
        if (null !== $this->ruleStatus) {
            $res['ruleStatus'] = $this->ruleStatus;
        }
        if (null !== $this->ruleVersionId) {
            $res['ruleVersionId'] = $this->ruleVersionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['bizVersion'])) {
            $model->bizVersion = $map['bizVersion'];
        }
        if (isset($map['consoleRuleId'])) {
            $model->consoleRuleId = $map['consoleRuleId'];
        }
        if (isset($map['eventCode'])) {
            $model->eventCode = $map['eventCode'];
        }
        if (isset($map['eventName'])) {
            $model->eventName = $map['eventName'];
        }
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }
        if (isset($map['logicExpression'])) {
            $model->logicExpression = $map['logicExpression'];
        }
        if (isset($map['mainEventCode'])) {
            $model->mainEventCode = $map['mainEventCode'];
        }
        if (isset($map['memo'])) {
            $model->memo = $map['memo'];
        }
        if (isset($map['ruleActionMap'])) {
            $model->ruleActionMap = $map['ruleActionMap'];
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
        if (isset($map['ruleName'])) {
            $model->ruleName = $map['ruleName'];
        }
        if (isset($map['ruleStatus'])) {
            $model->ruleStatus = $map['ruleStatus'];
        }
        if (isset($map['ruleVersionId'])) {
            $model->ruleVersionId = $map['ruleVersionId'];
        }

        return $model;
    }
}
