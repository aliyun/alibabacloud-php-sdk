<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeRuleDetailByRuleIdResponseBody;

use AlibabaCloud\Dara\Model;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $authType;

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
    public $createType;

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
    public $ruleAuthType;

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
        'authType' => 'authType',
        'bizVersion' => 'bizVersion',
        'consoleRuleId' => 'consoleRuleId',
        'createType' => 'createType',
        'eventCode' => 'eventCode',
        'eventName' => 'eventName',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'logicExpression' => 'logicExpression',
        'mainEventCode' => 'mainEventCode',
        'memo' => 'memo',
        'ruleActionMap' => 'ruleActionMap',
        'ruleActions' => 'ruleActions',
        'ruleAuthType' => 'ruleAuthType',
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
        if (\is_array($this->ruleActionMap)) {
            Model::validateArray($this->ruleActionMap);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authType) {
            $res['authType'] = $this->authType;
        }

        if (null !== $this->bizVersion) {
            $res['bizVersion'] = $this->bizVersion;
        }

        if (null !== $this->consoleRuleId) {
            $res['consoleRuleId'] = $this->consoleRuleId;
        }

        if (null !== $this->createType) {
            $res['createType'] = $this->createType;
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
            if (\is_array($this->ruleActionMap)) {
                $res['ruleActionMap'] = [];
                foreach ($this->ruleActionMap as $key1 => $value1) {
                    $res['ruleActionMap'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->ruleActions) {
            $res['ruleActions'] = $this->ruleActions;
        }

        if (null !== $this->ruleAuthType) {
            $res['ruleAuthType'] = $this->ruleAuthType;
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
        if (isset($map['authType'])) {
            $model->authType = $map['authType'];
        }

        if (isset($map['bizVersion'])) {
            $model->bizVersion = $map['bizVersion'];
        }

        if (isset($map['consoleRuleId'])) {
            $model->consoleRuleId = $map['consoleRuleId'];
        }

        if (isset($map['createType'])) {
            $model->createType = $map['createType'];
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
            if (!empty($map['ruleActionMap'])) {
                $model->ruleActionMap = [];
                foreach ($map['ruleActionMap'] as $key1 => $value1) {
                    $model->ruleActionMap[$key1] = $value1;
                }
            }
        }

        if (isset($map['ruleActions'])) {
            $model->ruleActions = $map['ruleActions'];
        }

        if (isset($map['ruleAuthType'])) {
            $model->ruleAuthType = $map['ruleAuthType'];
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
