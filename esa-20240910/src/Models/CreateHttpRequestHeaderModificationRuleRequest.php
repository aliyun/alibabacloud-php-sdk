<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\CreateHttpRequestHeaderModificationRuleRequest\requestHeaderModification;
use AlibabaCloud\Tea\Model;

class CreateHttpRequestHeaderModificationRuleRequest extends Model
{
    /**
     * @description Modify request headers, supporting add, delete, and modify operations.
     *
     * This parameter is required.
     *
     * @var requestHeaderModification[]
     */
    public $requestHeaderModification;

    /**
     * @description Rule content, using conditional expressions to match user requests. This parameter is not required when adding a global configuration. There are two usage scenarios:
     * - To match all incoming requests: Set the value to true
     * - To match specific requests: Set the value to a custom expression, for example: (http.host eq \\"video.example.com\\")
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
     * @description Site ID, which can be obtained by calling the [ListSites](~~ListSites~~) interface.
     *
     * This parameter is required.
     *
     * @example 5407498413****
     *
     * @var int
     */
    public $siteId;

    /**
     * @description Version number of the site configuration. For sites with version management enabled, this parameter can specify the version to which the configuration applies, defaulting to version 0.
     *
     * @example 0
     *
     * @var int
     */
    public $siteVersion;
    protected $_name = [
        'requestHeaderModification' => 'RequestHeaderModification',
        'rule' => 'Rule',
        'ruleEnable' => 'RuleEnable',
        'ruleName' => 'RuleName',
        'siteId' => 'SiteId',
        'siteVersion' => 'SiteVersion',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestHeaderModification) {
            $res['RequestHeaderModification'] = [];
            if (null !== $this->requestHeaderModification && \is_array($this->requestHeaderModification)) {
                $n = 0;
                foreach ($this->requestHeaderModification as $item) {
                    $res['RequestHeaderModification'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (null !== $this->siteVersion) {
            $res['SiteVersion'] = $this->siteVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateHttpRequestHeaderModificationRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestHeaderModification'])) {
            if (!empty($map['RequestHeaderModification'])) {
                $model->requestHeaderModification = [];
                $n = 0;
                foreach ($map['RequestHeaderModification'] as $item) {
                    $model->requestHeaderModification[$n++] = null !== $item ? requestHeaderModification::fromMap($item) : $item;
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
        if (isset($map['SiteVersion'])) {
            $model->siteVersion = $map['SiteVersion'];
        }

        return $model;
    }
}
