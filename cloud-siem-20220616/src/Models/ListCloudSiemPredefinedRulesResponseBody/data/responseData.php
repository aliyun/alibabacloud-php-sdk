<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListCloudSiemPredefinedRulesResponseBody\data;

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
     * @var string
     */
    public $attCk;

    /**
     * @example allToSingle
     *
     * @var string
     */
    public $eventTransferType;

    /**
     * @description The time when the rule was created.
     *
     * @example 2021-01-06 16:37:29
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The time when the rule was modified.
     *
     * @example 2021-01-06 16:37:29
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The ID of the predefined rule.
     *
     * @example 123456789
     *
     * @var int
     */
    public $id;

    /**
     * @description The internal code of the rule description.
     *
     * @example ${siem_rule_description_siem_cfw-attack-count-level-up_cfw-attack}
     *
     * @var string
     */
    public $ruleDescMds;

    /**
     * @description The name of the rule.
     *
     * @example siem_base64-command-exec_aegis-proc
     *
     * @var string
     */
    public $ruleName;

    /**
     * @example siem_base64-command-exec_aegis-proc
     *
     * @var string
     */
    public $ruleNameCn;

    /**
     * @example siem_base64-command-exec_aegis-proc
     *
     * @var string
     */
    public $ruleNameEn;

    /**
     * @description The internal code of the rule name.
     *
     * @example ${siem_rule_name_siem_cfw-attack-count-level-up_cfw-attack}
     *
     * @var string
     */
    public $ruleNameMds;

    /**
     * @description The log source of the rule.
     *
     * @example cloud_siem_aegis_proc
     *
     * @var string
     */
    public $source;

    /**
     * @description The status of the predefined rule. Valid values:
     *
     *   0: The rule is in the initial state.
     *   100: The rule takes effect.
     *
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @description The threat level. Valid values:
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
        'alertType'         => 'AlertType',
        'attCk'             => 'AttCk',
        'eventTransferType' => 'EventTransferType',
        'gmtCreate'         => 'GmtCreate',
        'gmtModified'       => 'GmtModified',
        'id'                => 'Id',
        'ruleDescMds'       => 'RuleDescMds',
        'ruleName'          => 'RuleName',
        'ruleNameCn'        => 'RuleNameCn',
        'ruleNameEn'        => 'RuleNameEn',
        'ruleNameMds'       => 'RuleNameMds',
        'source'            => 'Source',
        'status'            => 'Status',
        'threatLevel'       => 'ThreatLevel',
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
        if (null !== $this->attCk) {
            $res['AttCk'] = $this->attCk;
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
        if (null !== $this->ruleDescMds) {
            $res['RuleDescMds'] = $this->ruleDescMds;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->ruleNameCn) {
            $res['RuleNameCn'] = $this->ruleNameCn;
        }
        if (null !== $this->ruleNameEn) {
            $res['RuleNameEn'] = $this->ruleNameEn;
        }
        if (null !== $this->ruleNameMds) {
            $res['RuleNameMds'] = $this->ruleNameMds;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
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
        if (isset($map['AttCk'])) {
            $model->attCk = $map['AttCk'];
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
        if (isset($map['RuleDescMds'])) {
            $model->ruleDescMds = $map['RuleDescMds'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['RuleNameCn'])) {
            $model->ruleNameCn = $map['RuleNameCn'];
        }
        if (isset($map['RuleNameEn'])) {
            $model->ruleNameEn = $map['RuleNameEn'];
        }
        if (isset($map['RuleNameMds'])) {
            $model->ruleNameMds = $map['RuleNameMds'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
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
