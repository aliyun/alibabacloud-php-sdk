<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\CreateSiteFunctionRequest;

use AlibabaCloud\Tea\Model;

class redirectRules extends Model
{
    /**
     * @description Specifies whether to retain the query string. Valid values:
     *
     *   on
     *   off
     *
     * @example on
     *
     * @var string
     */
    public $reserveQueryString;

    /**
     * @description The rule content.
     *
     * @example [{"MatchType":"http.request.method","MatchOperator":"eq","MatchValue":"GET","Negate":false}]
     *
     * @var string
     */
    public $rule;

    /**
     * @description Specifies whether to enable the rule. Valid values:
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
     * @description The response code that you want to use to indicate URL redirection. Valid value:
     *
     *   301
     *   302
     *   303
     *   307
     *   308
     *
     * @example 301
     *
     * @var string
     */
    public $statusCode;

    /**
     * @description The destination URL to which requests are redirected.
     *
     * @example http://www.exapmle.com/index.html
     *
     * @var string
     */
    public $targetUrl;

    /**
     * @description The redirect type. Valid value:
     *
     *   static
     *
     * @example static
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'reserveQueryString' => 'ReserveQueryString',
        'rule'               => 'Rule',
        'ruleEnable'         => 'RuleEnable',
        'ruleName'           => 'RuleName',
        'statusCode'         => 'StatusCode',
        'targetUrl'          => 'TargetUrl',
        'type'               => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return redirectRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
