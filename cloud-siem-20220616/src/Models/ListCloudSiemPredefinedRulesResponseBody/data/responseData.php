<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListCloudSiemPredefinedRulesResponseBody\data;

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
    public $attCk;

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
    public $ruleDescMds;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var string
     */
    public $ruleNameCn;

    /**
     * @var string
     */
    public $ruleNameEn;

    /**
     * @var string
     */
    public $ruleNameMds;

    /**
     * @var string
     */
    public $source;

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
        'attCk' => 'AttCk',
        'eventTransferType' => 'EventTransferType',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id' => 'Id',
        'ruleDescMds' => 'RuleDescMds',
        'ruleName' => 'RuleName',
        'ruleNameCn' => 'RuleNameCn',
        'ruleNameEn' => 'RuleNameEn',
        'ruleNameMds' => 'RuleNameMds',
        'source' => 'Source',
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
