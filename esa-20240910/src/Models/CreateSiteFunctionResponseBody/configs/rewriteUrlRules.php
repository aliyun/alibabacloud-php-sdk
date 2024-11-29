<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\CreateSiteFunctionResponseBody\configs;

use AlibabaCloud\Tea\Model;

class rewriteUrlRules extends Model
{
    /**
     * @description The configuration ID.
     *
     * @example 352816096987136
     *
     * @var int
     */
    public $configId;

    /**
     * @description The desired query string to which you want to rewrite the query string in the original request.
     *
     * @example ?example=123
     *
     * @var string
     */
    public $queryString;

    /**
     * @description The query string rewrite method. Valid values:
     *
     *   static
     *   dynamic
     *
     * @example static
     *
     * @var string
     */
    public $rewriteQueryStringType;

    /**
     * @description The path rewrite method. Valid values:
     *
     *   static
     *   dynamic
     *
     * @example static
     *
     * @var string
     */
    public $rewriteUriType;

    /**
     * @description The rule content.
     *
     * @example [{"MatchType":"http.request.method","MatchOperator":"eq","MatchValue":"GET","Negate":false}]
     *
     * @var string
     */
    public $rule;

    /**
     * @description Indicates whether the rule is enabled. Valid values:
     *
     *   on
     *   off
     *
     * @example on
     *
     * @var string
     */
    public $ruleEnable;

    /**
     * @description The rule name.
     *
     * @example rule_example
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The order in which the rule is executed.
     *
     * @example 1
     *
     * @var string
     */
    public $sequence;

    /**
     * @description The desired URI to which you want to rewrite the path in the original request.
     *
     * @example /image.example.com/index.html
     *
     * @var string
     */
    public $uri;
    protected $_name = [
        'configId'               => 'ConfigId',
        'queryString'            => 'QueryString',
        'rewriteQueryStringType' => 'RewriteQueryStringType',
        'rewriteUriType'         => 'RewriteUriType',
        'rule'                   => 'Rule',
        'ruleEnable'             => 'RuleEnable',
        'ruleName'               => 'RuleName',
        'sequence'               => 'Sequence',
        'uri'                    => 'Uri',
    ];

    public function validate()
    {
    }

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
        if (null !== $this->sequence) {
            $res['Sequence'] = $this->sequence;
        }
        if (null !== $this->uri) {
            $res['Uri'] = $this->uri;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rewriteUrlRules
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
        if (isset($map['Sequence'])) {
            $model->sequence = $map['Sequence'];
        }
        if (isset($map['Uri'])) {
            $model->uri = $map['Uri'];
        }

        return $model;
    }
}
