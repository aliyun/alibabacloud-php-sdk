<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Tea\Model;

class PostCustomizeRuleRequest extends Model
{
    /**
     * @description The risk type.
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
     * @var string
     */
    public $attCk;

    /**
     * @description The extended information about event generation. If eventTransferType is set to allToSingle, the value of this parameter indicates the length and unit of the alert aggregation window.
     *
     * @example {"time":"1","unit":"MINUTE"}
     *
     * @var string
     */
    public $eventTransferExt;

    /**
     * @description Specifies whether to convert an alert to an event. Valid values:
     *
     *   0: no
     *   1: yes
     *
     * @example 1
     *
     * @var int
     */
    public $eventTransferSwitch;

    /**
     * @description The event generation method. Valid values:
     *
     *   default: The default method is used.
     *   singleToSingle: The system generates an event for each alert.
     *   allToSingle: The system generates an event for alerts within a period of time.
     *
     * @example allToSingle
     *
     * @var string
     */
    public $eventTransferType;

    /**
     * @description The ID of the rule.
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
     * @example ${security_event_config.event_name.webshellName_clientav}
     *
     * @var string
     */
    public $logTypeMds;

    /**
     * @description The window length of the rule.
     *
     * @example {"time":"1","unit":"HOUR"}
     *
     * @var string
     */
    public $queryCycle;

    /**
     * @description The region in which the data management center of the threat analysis feature resides. Specify this parameter based on the regions in which your assets reside. Valid values:
     *
     *   cn-hangzhou: Your assets reside in regions in China.
     *   ap-southeast-1: Your assets reside in regions outside China.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $roleFor;

    /**
     * @var int
     */
    public $roleType;

    /**
     * @description The query condition of the rule. The value is in the JSON format.
     *
     * @example [[{"not":false,"left":"alert_name","operator":"=","right":"WEBSHELL"}]]
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
     * @description The log aggregation field of the rule. The value is a JSON string.
     *
     * @example ["asset_id"]
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
     * @description The threshold configuration of the rule. The value is in the JSON format.
     *
     * @example {"aggregateFunction":"count","aggregateFunctionName":"count","field":"activity_name","operator":"&lt;=","value":1}
     *
     * @var string
     */
    public $ruleThreshold;

    /**
     * @description The risk level. Valid values:
     *
     *   serious: high
     *   suspicious: medium
     *   remind: low
     *
     * @example remind
     *
     * @var string
     */
    public $threatLevel;
    protected $_name = [
        'alertType'           => 'AlertType',
        'alertTypeMds'        => 'AlertTypeMds',
        'attCk'               => 'AttCk',
        'eventTransferExt'    => 'EventTransferExt',
        'eventTransferSwitch' => 'EventTransferSwitch',
        'eventTransferType'   => 'EventTransferType',
        'id'                  => 'Id',
        'logSource'           => 'LogSource',
        'logSourceMds'        => 'LogSourceMds',
        'logType'             => 'LogType',
        'logTypeMds'          => 'LogTypeMds',
        'queryCycle'          => 'QueryCycle',
        'regionId'            => 'RegionId',
        'roleFor'             => 'RoleFor',
        'roleType'            => 'RoleType',
        'ruleCondition'       => 'RuleCondition',
        'ruleDesc'            => 'RuleDesc',
        'ruleGroup'           => 'RuleGroup',
        'ruleName'            => 'RuleName',
        'ruleThreshold'       => 'RuleThreshold',
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
        if (null !== $this->attCk) {
            $res['AttCk'] = $this->attCk;
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->roleFor) {
            $res['RoleFor'] = $this->roleFor;
        }
        if (null !== $this->roleType) {
            $res['RoleType'] = $this->roleType;
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
        if (null !== $this->threatLevel) {
            $res['ThreatLevel'] = $this->threatLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PostCustomizeRuleRequest
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
        if (isset($map['AttCk'])) {
            $model->attCk = $map['AttCk'];
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RoleFor'])) {
            $model->roleFor = $map['RoleFor'];
        }
        if (isset($map['RoleType'])) {
            $model->roleType = $map['RoleType'];
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
        if (isset($map['ThreatLevel'])) {
            $model->threatLevel = $map['ThreatLevel'];
        }

        return $model;
    }
}
