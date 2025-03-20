<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListRedirectRulesResponseBody;

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
     * @description Preserve query string. Value range:
     * - on: enabled.
     * - off: disabled.
     *
     * @example on
     *
     * @var string
     */
    public $reserveQueryString;

    /**
     * @description Rule content, using conditional expressions to match user requests. This parameter does not need to be set when adding a global configuration. There are two usage scenarios:
     * - Match all incoming requests: Set the value to true
     * - Match specific requests: Set the value to a custom expression, for example: (http.host eq \\"video.example.com\\")
     *
     * @example (http.host eq "video.example.com")
     *
     * @var string
     */
    public $rule;

    /**
     * @description Rule switch. This parameter does not need to be set when adding a global configuration. Possible values:
     * - on: Enabled.
     * - off: Disabled.
     *
     * @example on
     *
     * @var string
     */
    public $ruleEnable;

    /**
     * @description Rule name. This parameter does not need to be set when adding a global configuration.
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
     * @description Version number of the site configuration. For sites with version management enabled, you can use this parameter to specify the effective version of the site configuration, with the default being version 0.
     *
     * @example 1
     *
     * @var int
     */
    public $siteVersion;

    /**
     * @description Response status code used by the node to respond to the client with the redirect address. Possible values:
     * - 301
     * - 302
     * - 303
     * - 307
     * - 308
     *
     * @example 301
     *
     * @var string
     */
    public $statusCode;

    /**
     * @description Target URL after redirection.
     *
     * @example http://www.exapmle.com/index.html
     *
     * @var string
     */
    public $targetUrl;

    /**
     * @description Redirect type. Possible values:
     * - static: Static mode.
     * - dynamic: Dynamic mode.
     *
     * @example static
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'configId' => 'ConfigId',
        'configType' => 'ConfigType',
        'reserveQueryString' => 'ReserveQueryString',
        'rule' => 'Rule',
        'ruleEnable' => 'RuleEnable',
        'ruleName' => 'RuleName',
        'sequence' => 'Sequence',
        'siteVersion' => 'SiteVersion',
        'statusCode' => 'StatusCode',
        'targetUrl' => 'TargetUrl',
        'type' => 'Type',
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
        if (null !== $this->reserveQueryString) {
            $res['ReserveQueryString'] = $this->reserveQueryString;
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
        if (null !== $this->statusCode) {
            $res['StatusCode'] = $this->statusCode;
        }
        if (null !== $this->targetUrl) {
            $res['TargetUrl'] = $this->targetUrl;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['ReserveQueryString'])) {
            $model->reserveQueryString = $map['ReserveQueryString'];
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
        if (isset($map['StatusCode'])) {
            $model->statusCode = $map['StatusCode'];
        }
        if (isset($map['TargetUrl'])) {
            $model->targetUrl = $map['TargetUrl'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
