<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListHttpResponseHeaderModificationRulesResponseBody;

use AlibabaCloud\SDK\ESA\V20240910\Models\ListHttpResponseHeaderModificationRulesResponseBody\configs\responseHeaderModification;
use AlibabaCloud\Tea\Model;

class configs extends Model
{
    /**
     * @description Configuration ID.
     *
     * @example 35281609698****
     *
     * @var int
     */
    public $configId;

    /**
     * @description Configuration type. Possible values:
     * - global: Global configuration.
     * - rule: Rule configuration.
     *
     * @example rule
     *
     * @var string
     */
    public $configType;

    /**
     * @description Modify response headers, supporting add, delete, and modify operations.
     *
     * @var responseHeaderModification[]
     */
    public $responseHeaderModification;

    /**
     * @description Rule content, using conditional expressions to match user requests. This parameter is not required when adding a global configuration. There are two usage scenarios:
     * - Match all incoming requests: Set the value to true
     * - Match specific requests: Set the value to a custom expression, for example: (http.host eq \\"video.example.com\\")
     *
     * @example (http.host eq "video.example.com")
     *
     * @var string
     */
    public $rule;

    /**
     * @description Rule switch. This parameter is not required when adding a global configuration. Possible values:
     * - on: Enable.
     * - off: Disable.
     *
     * @example on
     *
     * @var string
     */
    public $ruleEnable;

    /**
     * @description Rule name. This parameter is not required when adding a global configuration.
     *
     * @example rule_example
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description Rule execution order. The smaller the value, the higher the priority.
     *
     * @example 1
     *
     * @var int
     */
    public $sequence;

    /**
     * @description Version number of the site configuration. For sites with version management enabled, you can use this parameter to specify the effective version of the configuration, with the default being version 0.
     *
     * @example 0
     *
     * @var int
     */
    public $siteVersion;
    protected $_name = [
        'configId' => 'ConfigId',
        'configType' => 'ConfigType',
        'responseHeaderModification' => 'ResponseHeaderModification',
        'rule' => 'Rule',
        'ruleEnable' => 'RuleEnable',
        'ruleName' => 'RuleName',
        'sequence' => 'Sequence',
        'siteVersion' => 'SiteVersion',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }
        if (null !== $this->configType) {
            $res['ConfigType'] = $this->configType;
        }
        if (null !== $this->responseHeaderModification) {
            $res['ResponseHeaderModification'] = [];
            if (null !== $this->responseHeaderModification && \is_array($this->responseHeaderModification)) {
                $n = 0;
                foreach ($this->responseHeaderModification as $item) {
                    $res['ResponseHeaderModification'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->rule) {
            $res['Rule'] = $this->rule;
        }
        if (null !== $this->ruleEnable) {
            $res['RuleEnable'] = $this->ruleEnable;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->sequence) {
            $res['Sequence'] = $this->sequence;
        }
        if (null !== $this->siteVersion) {
            $res['SiteVersion'] = $this->siteVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }
        if (isset($map['ConfigType'])) {
            $model->configType = $map['ConfigType'];
        }
        if (isset($map['ResponseHeaderModification'])) {
            if (!empty($map['ResponseHeaderModification'])) {
                $model->responseHeaderModification = [];
                $n = 0;
                foreach ($map['ResponseHeaderModification'] as $item) {
                    $model->responseHeaderModification[$n++] = null !== $item ? responseHeaderModification::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Rule'])) {
            $model->rule = $map['Rule'];
        }
        if (isset($map['RuleEnable'])) {
            $model->ruleEnable = $map['RuleEnable'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['Sequence'])) {
            $model->sequence = $map['Sequence'];
        }
        if (isset($map['SiteVersion'])) {
            $model->siteVersion = $map['SiteVersion'];
        }

        return $model;
    }
}
