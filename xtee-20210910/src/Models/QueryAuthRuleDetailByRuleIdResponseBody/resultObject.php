<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\QueryAuthRuleDetailByRuleIdResponseBody;

use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
    /**
     * @var int
     */
    public $auditId;

    /**
     * @var string
     */
    public $authType;

    /**
     * @var string
     */
    public $authUsers;

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
    public $memo;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string[]
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

    /**
     * @var string
     */
    public $templateType;

    /**
     * @var int
     */
    public $version;
    protected $_name = [
        'auditId'         => 'auditId',
        'authType'        => 'authType',
        'authUsers'       => 'authUsers',
        'consoleRuleId'   => 'consoleRuleId',
        'eventCode'       => 'eventCode',
        'eventName'       => 'eventName',
        'gmtCreate'       => 'gmtCreate',
        'gmtModified'     => 'gmtModified',
        'logicExpression' => 'logicExpression',
        'memo'            => 'memo',
        'priority'        => 'priority',
        'ruleActionMap'   => 'ruleActionMap',
        'ruleActions'     => 'ruleActions',
        'ruleAuthType'    => 'ruleAuthType',
        'ruleExpressions' => 'ruleExpressions',
        'ruleId'          => 'ruleId',
        'ruleName'        => 'ruleName',
        'ruleStatus'      => 'ruleStatus',
        'ruleVersionId'   => 'ruleVersionId',
        'templateType'    => 'templateType',
        'version'         => 'version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auditId) {
            $res['auditId'] = $this->auditId;
        }
        if (null !== $this->authType) {
            $res['authType'] = $this->authType;
        }
        if (null !== $this->authUsers) {
            $res['authUsers'] = $this->authUsers;
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
        if (null !== $this->memo) {
            $res['memo'] = $this->memo;
        }
        if (null !== $this->priority) {
            $res['priority'] = $this->priority;
        }
        if (null !== $this->ruleActionMap) {
            $res['ruleActionMap'] = $this->ruleActionMap;
        }
        if (null !== $this->ruleActions) {
            $res['ruleActions'] = $this->ruleActions;
        }
        if (null !== $this->ruleAuthType) {
            $res['ruleAuthType'] = $this->ruleAuthType;
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
        if (null !== $this->templateType) {
            $res['templateType'] = $this->templateType;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
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
        if (isset($map['auditId'])) {
            $model->auditId = $map['auditId'];
        }
        if (isset($map['authType'])) {
            $model->authType = $map['authType'];
        }
        if (isset($map['authUsers'])) {
            $model->authUsers = $map['authUsers'];
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
        if (isset($map['memo'])) {
            $model->memo = $map['memo'];
        }
        if (isset($map['priority'])) {
            $model->priority = $map['priority'];
        }
        if (isset($map['ruleActionMap'])) {
            $model->ruleActionMap = $map['ruleActionMap'];
        }
        if (isset($map['ruleActions'])) {
            $model->ruleActions = $map['ruleActions'];
        }
        if (isset($map['ruleAuthType'])) {
            $model->ruleAuthType = $map['ruleAuthType'];
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
        if (isset($map['templateType'])) {
            $model->templateType = $map['templateType'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
