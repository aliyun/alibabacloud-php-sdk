<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class UpdateRewriteUrlRuleRequest extends Model
{
    /**
     * @description Configuration ID. It can be obtained by calling the [ListRewriteUrlRules](https://help.aliyun.com/document_detail/2867480.html) interface.
     *
     * This parameter is required.
     *
     * @example 3528160969****
     *
     * @var int
     */
    public $configId;

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
     * @example example=123
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description Site ID, which can be obtained by calling the [ListSites](https://help.aliyun.com/document_detail/2850189.html) interface.
     *
     * This parameter is required.
     *
     * @example 123456789****
     *
     * @var int
     */
    public $siteId;

    /**
     * @description The target URI after rewriting.
     *
     * @example /image/example.jpg
     *
     * @var string
     */
    public $uri;
    protected $_name = [
        'configId' => 'ConfigId',
        'queryString' => 'QueryString',
        'rewriteQueryStringType' => 'RewriteQueryStringType',
        'rewriteUriType' => 'RewriteUriType',
        'rule' => 'Rule',
        'ruleEnable' => 'RuleEnable',
        'ruleName' => 'RuleName',
        'siteId' => 'SiteId',
        'uri' => 'Uri',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
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
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }
        if (null !== $this->uri) {
            $res['Uri'] = $this->uri;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateRewriteUrlRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
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
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }
        if (isset($map['Uri'])) {
            $model->uri = $map['Uri'];
        }

        return $model;
    }
}
