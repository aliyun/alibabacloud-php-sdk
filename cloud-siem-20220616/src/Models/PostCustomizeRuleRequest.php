<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Tea\Model;

class PostCustomizeRuleRequest extends Model
{
    /**
     * @example WEBSHELL
     *
     * @var string
     */
    public $alertType;

    /**
     * @example ${siem_rule_type_process_abnormal_command}
     *
     * @var string
     */
    public $alertTypeMds;

    /**
     * @example {"time":"1","unit":"MINUTE"}
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
     * @example ${sas.cloudsiem.prod.cloud_siem_aegis_sas_alert}
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
     * @example ${security_event_config.event_name.webshellName_clientav}
     *
     * @var string
     */
    public $logTypeMds;

    /**
     * @example {"time":"1","unit":"HOUR"}
     *
     * @var string
     */
    public $queryCycle;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example [[{"not":false,"left":"alert_name","operator":"=","right":"WEBSHELL"}]]
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
     * @example ["asset_id"]
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
     * @example {"aggregateFunction":"count","aggregateFunctionName":"count","field":"activity_name","operator":"&lt;=","value":1}
     *
     * @var string
     */
    public $ruleThreshold;

    /**
     * @example remind
     *
     * @var string
     */
    public $threatLevel;
    protected $_name = [
        'alertType'           => 'AlertType',
        'alertTypeMds'        => 'AlertTypeMds',
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
