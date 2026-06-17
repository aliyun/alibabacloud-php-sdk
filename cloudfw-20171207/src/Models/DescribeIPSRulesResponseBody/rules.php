<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeIPSRulesResponseBody;

use AlibabaCloud\Dara\Model;

class rules extends Model
{
    /**
     * @var string
     */
    public $attackApp;

    /**
     * @var string
     */
    public $attackType;

    /**
     * @var string
     */
    public $currentMode;

    /**
     * @var string
     */
    public $cve;

    /**
     * @var string
     */
    public $defaultMode;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $ruleClass;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var int
     */
    public $ruleLevel;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var string
     */
    public $ruleUuid;

    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var string
     */
    public $userDefined;

    /**
     * @var int
     */
    public $userStatus;
    protected $_name = [
        'attackApp' => 'AttackApp',
        'attackType' => 'AttackType',
        'currentMode' => 'CurrentMode',
        'cve' => 'Cve',
        'defaultMode' => 'DefaultMode',
        'description' => 'Description',
        'ruleClass' => 'RuleClass',
        'ruleId' => 'RuleId',
        'ruleLevel' => 'RuleLevel',
        'ruleName' => 'RuleName',
        'ruleUuid' => 'RuleUuid',
        'updateTime' => 'UpdateTime',
        'userDefined' => 'UserDefined',
        'userStatus' => 'UserStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attackApp) {
            $res['AttackApp'] = $this->attackApp;
        }

        if (null !== $this->attackType) {
            $res['AttackType'] = $this->attackType;
        }

        if (null !== $this->currentMode) {
            $res['CurrentMode'] = $this->currentMode;
        }

        if (null !== $this->cve) {
            $res['Cve'] = $this->cve;
        }

        if (null !== $this->defaultMode) {
            $res['DefaultMode'] = $this->defaultMode;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->ruleClass) {
            $res['RuleClass'] = $this->ruleClass;
        }

        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        if (null !== $this->ruleLevel) {
            $res['RuleLevel'] = $this->ruleLevel;
        }

        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        if (null !== $this->ruleUuid) {
            $res['RuleUuid'] = $this->ruleUuid;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        if (null !== $this->userDefined) {
            $res['UserDefined'] = $this->userDefined;
        }

        if (null !== $this->userStatus) {
            $res['UserStatus'] = $this->userStatus;
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
        if (isset($map['AttackApp'])) {
            $model->attackApp = $map['AttackApp'];
        }

        if (isset($map['AttackType'])) {
            $model->attackType = $map['AttackType'];
        }

        if (isset($map['CurrentMode'])) {
            $model->currentMode = $map['CurrentMode'];
        }

        if (isset($map['Cve'])) {
            $model->cve = $map['Cve'];
        }

        if (isset($map['DefaultMode'])) {
            $model->defaultMode = $map['DefaultMode'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['RuleClass'])) {
            $model->ruleClass = $map['RuleClass'];
        }

        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        if (isset($map['RuleLevel'])) {
            $model->ruleLevel = $map['RuleLevel'];
        }

        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        if (isset($map['RuleUuid'])) {
            $model->ruleUuid = $map['RuleUuid'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        if (isset($map['UserDefined'])) {
            $model->userDefined = $map['UserDefined'];
        }

        if (isset($map['UserStatus'])) {
            $model->userStatus = $map['UserStatus'];
        }

        return $model;
    }
}
