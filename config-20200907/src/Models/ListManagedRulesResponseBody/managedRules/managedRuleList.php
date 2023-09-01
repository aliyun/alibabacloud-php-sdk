<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListManagedRulesResponseBody\managedRules;

use AlibabaCloud\SDK\Config\V20200907\Models\ListManagedRulesResponseBody\managedRules\managedRuleList\scope;
use AlibabaCloud\Tea\Model;

class managedRuleList extends Model
{
    /**
     * @description The name of the managed rule.
     *
     * @example test-rule-name
     *
     * @var string
     */
    public $configRuleName;

    /**
     * @description The description of the managed rule.
     *
     * @example The description of the test rule.
     *
     * @var string
     */
    public $description;

    /**
     * @description The URL of the topic that describes how the managed rule remediates the incompliant configurations.
     *
     * @example https://example.aliyundoc.com
     *
     * @var string
     */
    public $helpUrls;

    /**
     * @description The unique identifier of the managed rule.
     *
     * @example cdn-domain-https-enabled
     *
     * @var string
     */
    public $identifier;

    /**
     * @description Classification description of the managed rule.
     *
     * @var string[]
     */
    public $labels;

    /**
     * @description Supported remediation template id.
     *
     * @example ACS-CDN-SetDomainServerCertificate
     *
     * @var string
     */
    public $remediationTemplateIdentifier;

    /**
     * @description Supported remediation template name.
     *
     * @example Configure encryption rules for OSS buckets
     *
     * @var string
     */
    public $remediationTemplateName;

    /**
     * @description The risk level of the resources that do not comply with the managed rule. Valid values:
     *
     *   1: high risk level
     *   2: medium risk level
     *   3: low risk level
     *
     * @example 1
     *
     * @var int
     */
    public $riskLevel;

    /**
     * @description The effective scope of the managed rule.
     *
     * @var scope
     */
    public $scope;

    /**
     * @description Whether pre-check is supported. Value:
     *
     * - false: not supported
     * @example true
     *
     * @var bool
     */
    public $supportPreviewManagedRule;
    protected $_name = [
        'configRuleName'                => 'ConfigRuleName',
        'description'                   => 'Description',
        'helpUrls'                      => 'HelpUrls',
        'identifier'                    => 'Identifier',
        'labels'                        => 'Labels',
        'remediationTemplateIdentifier' => 'RemediationTemplateIdentifier',
        'remediationTemplateName'       => 'RemediationTemplateName',
        'riskLevel'                     => 'RiskLevel',
        'scope'                         => 'Scope',
        'supportPreviewManagedRule'     => 'SupportPreviewManagedRule',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['Labels'] = $this->labels;
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
            $res['Scope'] = null !== $this->scope ? $this->scope->toMap() : null;
        }
        if (null !== $this->supportPreviewManagedRule) {
            $res['SupportPreviewManagedRule'] = $this->supportPreviewManagedRule;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return managedRuleList
     */
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
                $model->labels = $map['Labels'];
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
