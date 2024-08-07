<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListCloudSiemCustomizeRulesResponseBody\data;

use AlibabaCloud\Tea\Model;

class responseData extends Model
{
    /**
     * @description The type of the risk.
     *
     * @example WEBSHELL
     *
     * @var string
     */
    public $alertType;

    /**
     * @description The internal code of the risk type.
     *
     * @example ${siem_rule_type_process_abnormal_command}
     *
     * @var string
     */
    public $alertTypeMds;

    /**
     * @description The ID of the Alibaba Cloud account in SIEM.
     *
     * @example 127608589417****
     *
     * @var int
     */
    public $aliuid;

    /**
     * @description The alert additional field for ATT\\&CK.
     *
     * @example T1595.002 Vulnerability Scanning
     *
     * @var string
     */
    public $attCk;

    /**
     * @description The type of the view. Valid values:
     *
     * 0: view of the current Alibaba Cloud account. 1: view of all accounts for the enterprise.
     * @example 1
     *
     * @var int
     */
    public $dataType;

    /**
     * @description The extended information about event generation. If the value of **eventTransferType** is **allToSingle**, the value of this parameter indicates the length and unit of the alert aggregation window. The HTML escape characters are reversed.
     *
     * @example {&quot;time&quot;:&quot;1&quot;,&quot;unit&quot;:&quot;MINUTE&quot;}
     *
     * @var string
     */
    public $eventTransferExt;

    /**
     * @description Indicates whether the system generates an event for the alert. Valid values:
     *
     *   **0**: no.
     *   **1**: yes.
     *
     * @example 1
     *
     * @var int
     */
    public $eventTransferSwitch;

    /**
     * @description The method that is used to generate an event. Valid values:
     *
     *   **default**: built-in method.
     *   **singleToSingle**: The system generates an event for each alert.
     *   **allToSingle**: The system generates an event for alerts within a period of time.
     *
     * @example allToSingle
     *
     * @var string
     */
    public $eventTransferType;

    /**
     * @description The time when the custom rule was created.
     *
     * @example 2021-01-06 16:37:29
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The time when the custom rule was last updated.
     *
     * @example 2021-01-06 16:37:29
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The ID of the custom rule.
     *
     * @example 123456789
     *
     * @var int
     */
    public $id;

    /**
     * @description The log source of the rule.
     *
     * @example cloud_siem_aegis_sas_alert
     *
     * @var string
     */
    public $logSource;

    /**
     * @description The internal code of the log source.
     *
     * @example ${sas.cloudsiem.prod.cloud_siem_aegis_sas_alert}
     *
     * @var string
     */
    public $logSourceMds;

    /**
     * @description The log type of the rule.
     *
     * @example ALERT_ACTIVITY
     *
     * @var string
     */
    public $logType;

    /**
     * @description The internal code of the log type.
     *
     * @example ${sas.cloudsiem.prod.alert_activity}
     *
     * @var string
     */
    public $logTypeMds;

    /**
     * @description The window length of the rule. The HTML escape characters are reversed.
     *
     * @example {&quot;time&quot;:&quot;1&quot;,&quot;unit&quot;:&quot;HOUR&quot;}
     *
     * @var string
     */
    public $queryCycle;

    /**
     * @description The query condition of the rule. The value is in the JSON format. The HTML escape characters are reversed.
     *
     * @example [[{&quot;not&quot;:false,&quot;left&quot;:&quot;alert_name&quot;,&quot;operator&quot;:&quot;=&quot;,&quot;right&quot;:&quot;WEBSHELL&quot;}]]
     *
     * @var string
     */
    public $ruleCondition;

    /**
     * @description The description of the rule.
     *
     * @example this rule is for waf scan
     *
     * @var string
     */
    public $ruleDesc;

    /**
     * @description The log aggregation field. The value is in the JSON format. The HTML escape characters are reversed.
     *
     * @example [&quot;asset_id&quot;]
     *
     * @var string
     */
    public $ruleGroup;

    /**
     * @description The name of the rule.
     *
     * @example waf_scan
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The threshold configurations of the rule in the JSON format. The HTML escape characters are reversed.
     *
     * @example {&quot;aggregateFunction&quot;:&quot;count&quot;,&quot;aggregateFunctionName&quot;:&quot;count&quot;,&quot;field&quot;:&quot;activity_name&quot;,&quot;operator&quot;:&quot;&lt;=&quot;,&quot;value&quot;:1}
     *
     * @var string
     */
    public $ruleThreshold;

    /**
     * @description The type of the rule. Valid values:
     *
     *   **predefine**
     *   **customize**
     *
     * @example customize
     *
     * @var string
     */
    public $ruleType;

    /**
     * @description The status of the rule. Valid values:
     *
     *   **0**: The rule is in the initial state.
     *   **10**: The simulation data is tested.
     *   **15**: The business data is being tested.
     *   **20**: The business data test is complete.
     *   **100**: The rule is in effect.
     *
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @description The risk level. Valid values:
     *
     *   **serious**: high-risk.
     *   **suspicious**: medium-risk.
     *   **remind**: low-risk.
     *
     * @example remind
     *
     * @var string
     */
    public $threatLevel;
    protected $_name = [
        'alertType'           => 'AlertType',
        'alertTypeMds'        => 'AlertTypeMds',
        'aliuid'              => 'Aliuid',
        'attCk'               => 'AttCk',
        'dataType'            => 'DataType',
        'eventTransferExt'    => 'EventTransferExt',
        'eventTransferSwitch' => 'EventTransferSwitch',
        'eventTransferType'   => 'EventTransferType',
        'gmtCreate'           => 'GmtCreate',
        'gmtModified'         => 'GmtModified',
        'id'                  => 'Id',
        'logSource'           => 'LogSource',
        'logSourceMds'        => 'LogSourceMds',
        'logType'             => 'LogType',
        'logTypeMds'          => 'LogTypeMds',
        'queryCycle'          => 'QueryCycle',
        'ruleCondition'       => 'RuleCondition',
        'ruleDesc'            => 'RuleDesc',
        'ruleGroup'           => 'RuleGroup',
        'ruleName'            => 'RuleName',
        'ruleThreshold'       => 'RuleThreshold',
        'ruleType'            => 'RuleType',
        'status'              => 'Status',
        'threatLevel'         => 'ThreatLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return responseData
     */
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
