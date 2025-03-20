<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListRewriteUrlRulesResponseBody;

use AlibabaCloud\Tea\Model;

class configs extends Model
{
    /**
     * @description Configuration ID.
     *
     * @example 39538644977****
     *
     * @var int
     */
    public $configId;

    /**
     * @description Configuration type. Value range:
     * - global: Global configuration;
     * - rule: Rule configuration;
     *
     * @example global
     *
     * @var string
     */
    public $configType;

    /**
     * @description The rewritten query string.
     *
     * @example example=123
     *
     * @var string
     */
    public $queryString;

    /**
     * @description Query string rewrite type. Value range:
     * - static: Static mode.
     * - dynamic: Dynamic mode.
     *
     * @example static
     *
     * @var string
     */
    public $rewriteQueryStringType;

    /**
     * @description URI rewrite type. Value range:
     * - static: Static mode.
     * - dynamic: Dynamic mode.
     *
     * @example static
     *
     * @var string
     */
    public $rewriteUriType;

    /**
     * @description Rule content, using conditional expressions to match user requests. Not required when adding a global configuration. There are two usage scenarios:
     * - Match all incoming requests: Set the value to true
     * - Match specific requests: Set the value to a custom expression, e.g., (http.host eq \\"video.example.com\\")
     *
     * @example (http.host eq "video.example.com")
     *
     * @var string
     */
    public $rule;

    /**
     * @description Rule switch. Not required when adding a global configuration. Value range:
     * - on: Enabled.
     * - off: Disabled.
     *
     * @example on
     *
     * @var string
     */
    public $ruleEnable;

    /**
     * @description Rule name. Not required when adding a global configuration.
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
     * @description Version number of the site configuration. For sites with version management enabled, you can use this parameter to specify the effective version of the configuration, defaulting to version 0.
     *
     * @example 0
     *
     * @var int
     */
    public $siteVersion;

    /**
     * @description Target URI after rewriting.
     *
     * @example /image.example.com/index.html
     *
     * @var string
     */
    public $uri;
    protected $_name = [
        'configId' => 'ConfigId',
        'configType' => 'ConfigType',
        'queryString' => 'QueryString',
        'rewriteQueryStringType' => 'RewriteQueryStringType',
        'rewriteUriType' => 'RewriteUriType',
        'rule' => 'Rule',
        'ruleEnable' => 'RuleEnable',
        'ruleName' => 'RuleName',
        'sequence' => 'Sequence',
        'siteVersion' => 'SiteVersion',
        'uri' => 'Uri',
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
        if (null !== $this->queryString) {
            $res['QueryString'] = $this->queryString;
        }
        if (null !== $this->rewriteQueryStringType) {
            $res['RewriteQueryStringType'] = $this->rewriteQueryStringType;
        }
        if (null !== $this->rewriteUriType) {
            $res['RewriteUriType'] = $this->rewriteUriType;
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
        if (null !== $this->uri) {
            $res['Uri'] = $this->uri;
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
        if (isset($map['QueryString'])) {
            $model->queryString = $map['QueryString'];
        }
        if (isset($map['RewriteQueryStringType'])) {
            $model->rewriteQueryStringType = $map['RewriteQueryStringType'];
        }
        if (isset($map['RewriteUriType'])) {
            $model->rewriteUriType = $map['RewriteUriType'];
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
        if (isset($map['Uri'])) {
            $model->uri = $map['Uri'];
        }

        return $model;
    }
}
