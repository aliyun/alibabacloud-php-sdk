<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListCloudSiemPredefinedRulesResponseBody\data;

use AlibabaCloud\Tea\Model;

class responseData extends Model
{
    /**
     * @example WEBSHELL
     *
     * @var string
     */
    public $alertType;

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
     * @example ${siem_rule_description_siem_cfw-attack-count-level-up_cfw-attack}
     *
     * @var string
     */
    public $ruleDescMds;

    /**
     * @example siem_base64-command-exec_aegis-proc
     *
     * @var string
     */
    public $ruleName;

    /**
     * @example ${siem_rule_name_siem_cfw-attack-count-level-up_cfw-attack}
     *
     * @var string
     */
    public $ruleNameMds;

    /**
     * @example cloud_siem_aegis_proc
     *
     * @var string
     */
    public $source;

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
        'alertType'   => 'AlertType',
        'gmtCreate'   => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id'          => 'Id',
        'ruleDescMds' => 'RuleDescMds',
        'ruleName'    => 'RuleName',
        'ruleNameMds' => 'RuleNameMds',
        'source'      => 'Source',
        'status'      => 'Status',
        'threatLevel' => 'ThreatLevel',
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
