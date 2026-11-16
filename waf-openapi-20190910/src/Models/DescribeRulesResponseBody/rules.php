<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeRulesResponseBody;

use AlibabaCloud\Dara\Model;

class rules extends Model
{
    /**
     * @var int
     */
    public $applicationType;

    /**
     * @var string
     */
    public $cveId;

    /**
     * @var string
     */
    public $cveUrl;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $protectionType;

    /**
     * @var int
     */
    public $riskLevel;

    /**
     * @var int
     */
    public $ruleId;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'applicationType' => 'ApplicationType',
        'cveId' => 'CveId',
        'cveUrl' => 'CveUrl',
        'description' => 'Description',
        'protectionType' => 'ProtectionType',
        'riskLevel' => 'RiskLevel',
        'ruleId' => 'RuleId',
        'ruleName' => 'RuleName',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationType) {
            $res['ApplicationType'] = $this->applicationType;
        }

        if (null !== $this->cveId) {
            $res['CveId'] = $this->cveId;
        }

        if (null !== $this->cveUrl) {
            $res['CveUrl'] = $this->cveUrl;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->protectionType) {
            $res['ProtectionType'] = $this->protectionType;
        }

        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }

        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['ApplicationType'])) {
            $model->applicationType = $map['ApplicationType'];
        }

        if (isset($map['CveId'])) {
            $model->cveId = $map['CveId'];
        }

        if (isset($map['CveUrl'])) {
            $model->cveUrl = $map['CveUrl'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['ProtectionType'])) {
            $model->protectionType = $map['ProtectionType'];
        }

        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
