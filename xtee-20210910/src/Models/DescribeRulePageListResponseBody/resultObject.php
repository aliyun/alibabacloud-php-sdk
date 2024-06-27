<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeRulePageListResponseBody;

use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeRulePageListResponseBody\resultObject\consoleAudit;
use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $authType;

    /**
     * @var consoleAudit
     */
    public $consoleAudit;

    /**
     * @var string
     */
    public $eventCode;

    /**
     * @var string
     */
    public $eventName;

    /**
     * @var string
     */
    public $eventType;

    /**
     * @var string
     */
    public $externalRuleName;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $mainRuleId;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $ruleAuthType;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var string
     */
    public $ruleMemo;

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
     * @var int
     */
    public $templateId;

    /**
     * @var int
     */
    public $version;
    protected $_name = [
        'authType'         => 'authType',
        'consoleAudit'     => 'consoleAudit',
        'eventCode'        => 'eventCode',
        'eventName'        => 'eventName',
        'eventType'        => 'eventType',
        'externalRuleName' => 'externalRuleName',
        'gmtCreate'        => 'gmtCreate',
        'gmtModified'      => 'gmtModified',
        'id'               => 'id',
        'mainRuleId'       => 'mainRuleId',
        'priority'         => 'priority',
        'ruleAuthType'     => 'ruleAuthType',
        'ruleId'           => 'ruleId',
        'ruleMemo'         => 'ruleMemo',
        'ruleName'         => 'ruleName',
        'ruleStatus'       => 'ruleStatus',
        'ruleVersionId'    => 'ruleVersionId',
        'templateId'       => 'templateId',
        'version'          => 'version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authType) {
            $res['authType'] = $this->authType;
        }
        if (null !== $this->consoleAudit) {
            $res['consoleAudit'] = null !== $this->consoleAudit ? $this->consoleAudit->toMap() : null;
        }
        if (null !== $this->eventCode) {
            $res['eventCode'] = $this->eventCode;
        }
        if (null !== $this->eventName) {
            $res['eventName'] = $this->eventName;
        }
        if (null !== $this->eventType) {
            $res['eventType'] = $this->eventType;
        }
        if (null !== $this->externalRuleName) {
            $res['externalRuleName'] = $this->externalRuleName;
        }
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->mainRuleId) {
            $res['mainRuleId'] = $this->mainRuleId;
        }
        if (null !== $this->priority) {
            $res['priority'] = $this->priority;
        }
        if (null !== $this->ruleAuthType) {
            $res['ruleAuthType'] = $this->ruleAuthType;
        }
        if (null !== $this->ruleId) {
            $res['ruleId'] = $this->ruleId;
        }
        if (null !== $this->ruleMemo) {
            $res['ruleMemo'] = $this->ruleMemo;
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
        if (null !== $this->templateId) {
            $res['templateId'] = $this->templateId;
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
        if (isset($map['authType'])) {
            $model->authType = $map['authType'];
        }
        if (isset($map['consoleAudit'])) {
            $model->consoleAudit = consoleAudit::fromMap($map['consoleAudit']);
        }
        if (isset($map['eventCode'])) {
            $model->eventCode = $map['eventCode'];
        }
        if (isset($map['eventName'])) {
            $model->eventName = $map['eventName'];
        }
        if (isset($map['eventType'])) {
            $model->eventType = $map['eventType'];
        }
        if (isset($map['externalRuleName'])) {
            $model->externalRuleName = $map['externalRuleName'];
        }
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['mainRuleId'])) {
            $model->mainRuleId = $map['mainRuleId'];
        }
        if (isset($map['priority'])) {
            $model->priority = $map['priority'];
        }
        if (isset($map['ruleAuthType'])) {
            $model->ruleAuthType = $map['ruleAuthType'];
        }
        if (isset($map['ruleId'])) {
            $model->ruleId = $map['ruleId'];
        }
        if (isset($map['ruleMemo'])) {
            $model->ruleMemo = $map['ruleMemo'];
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
        if (isset($map['templateId'])) {
            $model->templateId = $map['templateId'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
