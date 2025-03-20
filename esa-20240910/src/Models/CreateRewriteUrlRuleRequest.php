<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class CreateRewriteUrlRuleRequest extends Model
{
    /**
     * @description The query string after rewriting.
     *
     * @example example=123
     *
     * @var string
     */
    public $queryString;

    /**
     * @description Query string rewrite type. Value range:
     *
     * - static: static mode.
     * - dynamic: dynamic mode.
     *
     * @example static
     *
     * @var string
     */
    public $rewriteQueryStringType;

    /**
     * @description URI rewrite type. Value range:
     *
     * - static: static mode.
     * - dynamic: dynamic mode.
     *
     * @example static
     *
     * @var string
     */
    public $rewriteUriType;

    /**
     * @description Rule content, using conditional expressions to match user requests. This parameter is not required when adding a global configuration. There are two usage scenarios:
     * - Match all incoming requests: set the value to true
     * - Match specific requests: set the value to a custom expression, for example: (http.host eq \\"video.example.com\\")
     *
     * @example (http.host eq "video.example.com")
     *
     * @var string
     */
    public $rule;

    /**
     * @description Rule switch. This parameter is not required when adding a global configuration. Value range:
     * - on: enable.
     * - off: disable.
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
     * @example 123456****
     *
     * @var int
     */
    public $siteId;

    /**
     * @description The version number of the site configuration. For sites with version management enabled, you can use this parameter to specify the effective version of the site configuration, defaulting to version 0.
     *
     * @example 0
     *
     * @var int
     */
    public $siteVersion;

    /**
     * @description The target URI after rewriting.
     *
     * @example /image/example.jpg
     *
     * @var string
     */
    public $uri;
    protected $_name = [
        'queryString' => 'QueryString',
        'rewriteQueryStringType' => 'RewriteQueryStringType',
        'rewriteUriType' => 'RewriteUriType',
        'rule' => 'Rule',
        'ruleEnable' => 'RuleEnable',
        'ruleName' => 'RuleName',
        'siteId' => 'SiteId',
        'siteVersion' => 'SiteVersion',
        'uri' => 'Uri',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
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
     * @return CreateRewriteUrlRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
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
