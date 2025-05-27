<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListCloudSiemCustomizeRulesResponseBody\data;

use AlibabaCloud\Dara\Model;

class responseData extends Model
{
    /**
     * @var string
     */
    public $alertType;

    /**
     * @var string
     */
    public $alertTypeMds;

    /**
     * @var int
     */
    public $aliuid;

    /**
     * @var string
     */
    public $attCk;

    /**
     * @var int
     */
    public $dataType;

    /**
     * @var string
     */
    public $eventTransferExt;

    /**
     * @var int
     */
    public $eventTransferSwitch;

    /**
     * @var string
     */
    public $eventTransferType;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $logSource;

    /**
     * @var string
     */
    public $logSourceMds;

    /**
     * @var string
     */
    public $logType;

    /**
     * @var string
     */
    public $logTypeMds;

    /**
     * @var string
     */
    public $queryCycle;

    /**
     * @var string
     */
    public $ruleCondition;

    /**
     * @var string
     */
    public $ruleDesc;

    /**
     * @var string
     */
    public $ruleGroup;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var string
     */
    public $ruleThreshold;

    /**
     * @var string
     */
    public $ruleType;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $threatLevel;
    protected $_name = [
        'alertType' => 'AlertType',
        'alertTypeMds' => 'AlertTypeMds',
        'aliuid' => 'Aliuid',
        'attCk' => 'AttCk',
        'dataType' => 'DataType',
        'eventTransferExt' => 'EventTransferExt',
        'eventTransferSwitch' => 'EventTransferSwitch',
        'eventTransferType' => 'EventTransferType',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id' => 'Id',
        'logSource' => 'LogSource',
        'logSourceMds' => 'LogSourceMds',
        'logType' => 'LogType',
        'logTypeMds' => 'LogTypeMds',
        'queryCycle' => 'QueryCycle',
        'ruleCondition' => 'RuleCondition',
        'ruleDesc' => 'RuleDesc',
        'ruleGroup' => 'RuleGroup',
        'ruleName' => 'RuleName',
        'ruleThreshold' => 'RuleThreshold',
        'ruleType' => 'RuleType',
        'status' => 'Status',
        'threatLevel' => 'ThreatLevel',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertType) {
            $res['AlertType'] = $this->alertType;
        }

        if (null !== $this->alertTypeMds) {
            $res['AlertTypeMds'] = $this->alertTypeMds;
        }

        if (null !== $this->aliuid) {
            $res['Aliuid'] = $this->aliuid;
        }

        if (null !== $this->attCk) {
            $res['AttCk'] = $this->attCk;
        }

        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }

        if (null !== $this->eventTransferExt) {
            $res['EventTransferExt'] = $this->eventTransferExt;
        }

        if (null !== $this->eventTransferSwitch) {
            $res['EventTransferSwitch'] = $this->eventTransferSwitch;
        }

        if (null !== $this->eventTransferType) {
            $res['EventTransferType'] = $this->eventTransferType;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->logSource) {
            $res['LogSource'] = $this->logSource;
        }

        if (null !== $this->logSourceMds) {
            $res['LogSourceMds'] = $this->logSourceMds;
        }

        if (null !== $this->logType) {
            $res['LogType'] = $this->logType;
        }

        if (null !== $this->logTypeMds) {
            $res['LogTypeMds'] = $this->logTypeMds;
        }

        if (null !== $this->queryCycle) {
            $res['QueryCycle'] = $this->queryCycle;
        }

        if (null !== $this->ruleCondition) {
            $res['RuleCondition'] = $this->ruleCondition;
        }

        if (null !== $this->ruleDesc) {
            $res['RuleDesc'] = $this->ruleDesc;
        }

        if (null !== $this->ruleGroup) {
            $res['RuleGroup'] = $this->ruleGroup;
        }

        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        if (null !== $this->ruleThreshold) {
            $res['RuleThreshold'] = $this->ruleThreshold;
        }

        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->threatLevel) {
            $res['ThreatLevel'] = $this->threatLevel;
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
        if (isset($map['AlertType'])) {
            $model->alertType = $map['AlertType'];
        }

        if (isset($map['AlertTypeMds'])) {
            $model->alertTypeMds = $map['AlertTypeMds'];
        }

        if (isset($map['Aliuid'])) {
            $model->aliuid = $map['Aliuid'];
        }

        if (isset($map['AttCk'])) {
            $model->attCk = $map['AttCk'];
        }

        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }

        if (isset($map['EventTransferExt'])) {
            $model->eventTransferExt = $map['EventTransferExt'];
        }

        if (isset($map['EventTransferSwitch'])) {
            $model->eventTransferSwitch = $map['EventTransferSwitch'];
        }

        if (isset($map['EventTransferType'])) {
            $model->eventTransferType = $map['EventTransferType'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['LogSource'])) {
            $model->logSource = $map['LogSource'];
        }

        if (isset($map['LogSourceMds'])) {
            $model->logSourceMds = $map['LogSourceMds'];
        }

        if (isset($map['LogType'])) {
            $model->logType = $map['LogType'];
        }

        if (isset($map['LogTypeMds'])) {
            $model->logTypeMds = $map['LogTypeMds'];
        }

        if (isset($map['QueryCycle'])) {
            $model->queryCycle = $map['QueryCycle'];
        }

        if (isset($map['RuleCondition'])) {
            $model->ruleCondition = $map['RuleCondition'];
        }

        if (isset($map['RuleDesc'])) {
            $model->ruleDesc = $map['RuleDesc'];
        }

        if (isset($map['RuleGroup'])) {
            $model->ruleGroup = $map['RuleGroup'];
        }

        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        if (isset($map['RuleThreshold'])) {
            $model->ruleThreshold = $map['RuleThreshold'];
        }

        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['ThreatLevel'])) {
            $model->threatLevel = $map['ThreatLevel'];
        }

        return $model;
    }
}
