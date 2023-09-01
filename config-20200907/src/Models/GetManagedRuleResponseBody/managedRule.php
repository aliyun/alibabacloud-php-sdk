<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetManagedRuleResponseBody;

use AlibabaCloud\SDK\Config\V20200907\Models\GetManagedRuleResponseBody\managedRule\scope;
use AlibabaCloud\SDK\Config\V20200907\Models\GetManagedRuleResponseBody\managedRule\sourceDetails;
use AlibabaCloud\Tea\Model;

class managedRule extends Model
{
    /**
     * @description The settings of the required input parameters for the managed rule.
     *
     * @example {}
     *
     * @var mixed[]
     */
    public $compulsoryInputParameterDetails;

    /**
     * @description The name of the managed rule.
     *
     * @example cdn-domain-https-enabled
     *
     * @var string
     */
    public $configRuleName;

    /**
     * @description The description of the managed rule.
     *
     * @example If HTTPS encryption is enabled for the CDN domain name, the configuration is considered compliant.
     *
     * @var string
     */
    public $description;

    /**
     * @description The URL of the topic that provides guidance on remediation for the managed rule.
     *
     * @example https://example.aliyundoc.com
     *
     * @var string
     */
    public $helpUrls;

    /**
     * @description The identifier of the managed rule.
     *
     * @example cdn-domain-https-enabled
     *
     * @var string
     */
    public $identifier;

    /**
     * @description The tags of the managed rule.
     *
     * @var string[]
     */
    public $labels;

    /**
     * @description The settings of the optional input parameters for the managed rule.
     *
     * @example {}
     *
     * @var mixed[]
     */
    public $optionalInputParameterDetails;

    /**
     * @description The risk level of the resources that are not compliant with the managed rule. Valid values:
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
     * @description The information about the trigger type of the managed rule.
     *
     * @var sourceDetails[]
     */
    public $sourceDetails;
    protected $_name = [
        'compulsoryInputParameterDetails' => 'CompulsoryInputParameterDetails',
        'configRuleName'                  => 'ConfigRuleName',
        'description'                     => 'Description',
        'helpUrls'                        => 'HelpUrls',
        'identifier'                      => 'Identifier',
        'labels'                          => 'Labels',
        'optionalInputParameterDetails'   => 'OptionalInputParameterDetails',
        'riskLevel'                       => 'RiskLevel',
        'scope'                           => 'Scope',
        'sourceDetails'                   => 'SourceDetails',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->compulsoryInputParameterDetails) {
            $res['CompulsoryInputParameterDetails'] = $this->compulsoryInputParameterDetails;
        }
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
        if (null !== $this->optionalInputParameterDetails) {
            $res['OptionalInputParameterDetails'] = $this->optionalInputParameterDetails;
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }
        if (null !== $this->scope) {
            $res['Scope'] = null !== $this->scope ? $this->scope->toMap() : null;
        }
        if (null !== $this->sourceDetails) {
            $res['SourceDetails'] = [];
            if (null !== $this->sourceDetails && \is_array($this->sourceDetails)) {
                $n = 0;
                foreach ($this->sourceDetails as $item) {
                    $res['SourceDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return managedRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompulsoryInputParameterDetails'])) {
            $model->compulsoryInputParameterDetails = $map['CompulsoryInputParameterDetails'];
        }
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
        if (isset($map['OptionalInputParameterDetails'])) {
            $model->optionalInputParameterDetails = $map['OptionalInputParameterDetails'];
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }
        if (isset($map['Scope'])) {
            $model->scope = scope::fromMap($map['Scope']);
        }
        if (isset($map['SourceDetails'])) {
            if (!empty($map['SourceDetails'])) {
                $model->sourceDetails = [];
                $n                    = 0;
                foreach ($map['SourceDetails'] as $item) {
                    $model->sourceDetails[$n++] = null !== $item ? sourceDetails::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
