<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeCustomizeRuleResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example WEBSHELL
     *
     * @var string
     */
    public $alertType;

    /**
     * @example siem_rule_type_process_abnormal_command
     *
     * @var string
     */
    public $alertTypeMds;

    /**
     * @example 127608589417****
     *
     * @var int
     */
    public $aliuid;

    /**
     * @example {&quot;time&quot;:&quot;1&quot;,&quot;unit&quot;:&quot;MINUTE&quot;}
     *
     * @var string
     */
    public $eventTransferExt;

    /**
     * @example 1
     *
     * @var int
     */
    public $eventTransferSwitch;

    /**
     * @example allToSingle
     *
     * @var string
     */
    public $eventTransferType;

    /**
     * @example 2021-01-06 16:37:29
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2021-01-06 16:37:29
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 123456789
     *
     * @var int
     */
    public $id;

    /**
     * @example cloud_siem_aegis_sas_alert
     *
     * @var string
     */
    public $logSource;

    /**
     * @example sas.cloudsiem.prod.cloud_siem_aegis_sas_alert
     *
     * @var string
     */
    public $logSourceMds;

    /**
     * @example ALERT_ACTIVITY
     *
     * @var string
     */
    public $logType;

    /**
     * @example security_event_config.event_name.webshellName_clientav
     *
     * @var string
     */
    public $logTypeMds;

    /**
     * @example {&quot;time&quot;:&quot;1&quot;,&quot;unit&quot;:&quot;HOUR&quot;}
     *
     * @var string
     */
    public $queryCycle;

    /**
     * @example [[{&quot;not&quot;:false,&quot;left&quot;:&quot;alert_name&quot;,&quot;operator&quot;:&quot;=&quot;,&quot;right&quot;:&quot;WEBSHELL&quot;}]]
     *
     * @var string
     */
    public $ruleCondition;

    /**
     * @example this rule is for waf scan
     *
     * @var string
     */
    public $ruleDesc;

    /**
     * @example [&quot;asset_id&quot;]
     *
     * @var string
     */
    public $ruleGroup;

    /**
     * @example waf_scan
     *
     * @var string
     */
    public $ruleName;

    /**
     * @example {&quot;aggregateFunction&quot;:&quot;count&quot;,&quot;aggregateFunctionName&quot;:&quot;count&quot;,&quot;field&quot;:&quot;activity_name&quot;,&quot;operator&quot;:&quot;&lt;=&quot;,&quot;value&quot;:1}
     *
     * @var string
     */
    public $ruleThreshold;

    /**
     * @example customize
     *
     * @var string
     */
    public $ruleType;

    /**
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @example remind
     *
     * @var string
     */
    public $threatLevel;
    protected $_name = [
        'alertType'           => 'AlertType',
        'alertTypeMds'        => 'AlertTypeMds',
        'aliuid'              => 'Aliuid',
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
     * @return data
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
