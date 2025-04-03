<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListManagedRulesResponseBody\managedRules;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\ListManagedRulesResponseBody\managedRules\managedRuleList\scope;

class managedRuleList extends Model
{
    /**
     * @var string
     */
    public $configRuleName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $helpUrls;

    /**
     * @var string
     */
    public $identifier;

    /**
     * @var string[]
     */
    public $labels;

    /**
     * @var string
     */
    public $remediationTemplateIdentifier;

    /**
     * @var string
     */
    public $remediationTemplateName;

    /**
     * @var int
     */
    public $riskLevel;

    /**
     * @var scope
     */
    public $scope;

    /**
     * @var bool
     */
    public $supportPreviewManagedRule;
    protected $_name = [
        'configRuleName' => 'ConfigRuleName',
        'description' => 'Description',
        'helpUrls' => 'HelpUrls',
        'identifier' => 'Identifier',
        'labels' => 'Labels',
        'remediationTemplateIdentifier' => 'RemediationTemplateIdentifier',
        'remediationTemplateName' => 'RemediationTemplateName',
        'riskLevel' => 'RiskLevel',
        'scope' => 'Scope',
        'supportPreviewManagedRule' => 'SupportPreviewManagedRule',
    ];

    public function validate()
    {
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        if (null !== $this->scope) {
            $this->scope->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configRuleName) {
            $res['ConfigRuleName'] = $this->configRuleName;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->helpUrls) {
            $res['HelpUrls'] = $this->helpUrls;
        }

        if (null !== $this->identifier) {
            $res['Identifier'] = $this->identifier;
        }

        if (null !== $this->labels) {
            if (\is_array($this->labels)) {
                $res['Labels'] = [];
                $n1 = 0;
                foreach ($this->labels as $item1) {
                    $res['Labels'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->remediationTemplateIdentifier) {
            $res['RemediationTemplateIdentifier'] = $this->remediationTemplateIdentifier;
        }

        if (null !== $this->remediationTemplateName) {
            $res['RemediationTemplateName'] = $this->remediationTemplateName;
        }

        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }

        if (null !== $this->scope) {
            $res['Scope'] = null !== $this->scope ? $this->scope->toArray($noStream) : $this->scope;
        }

        if (null !== $this->supportPreviewManagedRule) {
            $res['SupportPreviewManagedRule'] = $this->supportPreviewManagedRule;
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
        if (isset($map['ConfigRuleName'])) {
            $model->configRuleName = $map['ConfigRuleName'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['HelpUrls'])) {
            $model->helpUrls = $map['HelpUrls'];
        }

        if (isset($map['Identifier'])) {
            $model->identifier = $map['Identifier'];
        }

        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n1 = 0;
                foreach ($map['Labels'] as $item1) {
                    $model->labels[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RemediationTemplateIdentifier'])) {
            $model->remediationTemplateIdentifier = $map['RemediationTemplateIdentifier'];
        }

        if (isset($map['RemediationTemplateName'])) {
            $model->remediationTemplateName = $map['RemediationTemplateName'];
        }

        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        if (isset($map['Scope'])) {
            $model->scope = scope::fromMap($map['Scope']);
        }

        if (isset($map['SupportPreviewManagedRule'])) {
            $model->supportPreviewManagedRule = $map['SupportPreviewManagedRule'];
        }

        return $model;
    }
}
