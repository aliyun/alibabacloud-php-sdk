<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateHttpResponseHeaderModificationRuleRequest\responseHeaderModification;
use AlibabaCloud\Tea\Model;

class UpdateHttpResponseHeaderModificationRuleRequest extends Model
{
    /**
     * @description Configuration ID. It can be obtained by calling the [ListHttpResponseHeaderModificationRules](https://help.aliyun.com/document_detail/2867483.html) interface.
     *
     * This parameter is required.
     *
     * @example 35281609698****
     *
     * @var int
     */
    public $configId;

    /**
     * @description Modify response headers, supporting three operation methods: add, delete, and modify.
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
     * @description Rule switch. This parameter is not required when adding a global configuration. Value range:
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
     * @description Site ID, which can be obtained by calling the [ListSites](~~ListSites~~) interface.
     *
     * This parameter is required.
     *
     * @example 123456******
     *
     * @var int
     */
    public $siteId;
    protected $_name = [
        'configId' => 'ConfigId',
        'responseHeaderModification' => 'ResponseHeaderModification',
        'rule' => 'Rule',
        'ruleEnable' => 'RuleEnable',
        'ruleName' => 'RuleName',
        'siteId' => 'SiteId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
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
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateHttpResponseHeaderModificationRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
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
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        return $model;
    }
}
