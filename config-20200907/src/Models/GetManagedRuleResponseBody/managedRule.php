<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetManagedRuleResponseBody;

use AlibabaCloud\SDK\Config\V20200907\Models\GetManagedRuleResponseBody\managedRule\scope;
use AlibabaCloud\SDK\Config\V20200907\Models\GetManagedRuleResponseBody\managedRule\sourceDetails;
use AlibabaCloud\Tea\Model;

class managedRule extends Model
{
    /**
     * @var mixed[]
     */
    public $compulsoryInputParameterDetails;

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
     * @var mixed[]
     */
    public $optionalInputParameterDetails;

    /**
     * @var int
     */
    public $riskLevel;

    /**
     * @var scope
     */
    public $scope;

    /**
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
