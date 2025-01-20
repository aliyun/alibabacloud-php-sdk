<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetCompliancePackResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\GetCompliancePackResponseBody\compliancePack\configRules;
use AlibabaCloud\SDK\Config\V20200907\Models\GetCompliancePackResponseBody\compliancePack\scope;

class compliancePack extends Model
{
    /**
     * @var int
     */
    public $accountId;
    /**
     * @var string
     */
    public $compliancePackId;
    /**
     * @var string
     */
    public $compliancePackName;
    /**
     * @var string
     */
    public $compliancePackTemplateId;
    /**
     * @var configRules[]
     */
    public $configRules;
    /**
     * @var int
     */
    public $createTimestamp;
    /**
     * @var string
     */
    public $description;
    /**
     * @var int
     */
    public $riskLevel;
    /**
     * @var scope
     */
    public $scope;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $templateContent;
    protected $_name = [
        'accountId'                => 'AccountId',
        'compliancePackId'         => 'CompliancePackId',
        'compliancePackName'       => 'CompliancePackName',
        'compliancePackTemplateId' => 'CompliancePackTemplateId',
        'configRules'              => 'ConfigRules',
        'createTimestamp'          => 'CreateTimestamp',
        'description'              => 'Description',
        'riskLevel'                => 'RiskLevel',
        'scope'                    => 'Scope',
        'status'                   => 'Status',
        'templateContent'          => 'TemplateContent',
    ];

    public function validate()
    {
        if (\is_array($this->configRules)) {
            Model::validateArray($this->configRules);
        }
        if (null !== $this->scope) {
            $this->scope->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }

        if (null !== $this->compliancePackId) {
            $res['CompliancePackId'] = $this->compliancePackId;
        }

        if (null !== $this->compliancePackName) {
            $res['CompliancePackName'] = $this->compliancePackName;
        }

        if (null !== $this->compliancePackTemplateId) {
            $res['CompliancePackTemplateId'] = $this->compliancePackTemplateId;
        }

        if (null !== $this->configRules) {
            if (\is_array($this->configRules)) {
                $res['ConfigRules'] = [];
                $n1                 = 0;
                foreach ($this->configRules as $item1) {
                    $res['ConfigRules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }

        if (null !== $this->scope) {
            $res['Scope'] = null !== $this->scope ? $this->scope->toArray($noStream) : $this->scope;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->templateContent) {
            $res['TemplateContent'] = $this->templateContent;
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
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }

        if (isset($map['CompliancePackId'])) {
            $model->compliancePackId = $map['CompliancePackId'];
        }

        if (isset($map['CompliancePackName'])) {
            $model->compliancePackName = $map['CompliancePackName'];
        }

        if (isset($map['CompliancePackTemplateId'])) {
            $model->compliancePackTemplateId = $map['CompliancePackTemplateId'];
        }

        if (isset($map['ConfigRules'])) {
            if (!empty($map['ConfigRules'])) {
                $model->configRules = [];
                $n1                 = 0;
                foreach ($map['ConfigRules'] as $item1) {
                    $model->configRules[$n1++] = configRules::fromMap($item1);
                }
            }
        }

        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        if (isset($map['Scope'])) {
            $model->scope = scope::fromMap($map['Scope']);
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TemplateContent'])) {
            $model->templateContent = $map['TemplateContent'];
        }

        return $model;
    }
}
