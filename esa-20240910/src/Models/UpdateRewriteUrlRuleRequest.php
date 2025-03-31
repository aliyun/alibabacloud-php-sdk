<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class UpdateRewriteUrlRuleRequest extends Model
{
    /**
     * @var int
     */
    public $configId;

    /**
     * @var string
     */
    public $queryString;

    /**
     * @var string
     */
    public $rewriteQueryStringType;

    /**
     * @var string
     */
    public $rewriteUriType;

    /**
     * @var string
     */
    public $rule;

    /**
     * @var string
     */
    public $ruleEnable;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var int
     */
    public $sequence;

    /**
     * @var int
     */
    public $siteId;

    /**
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
        'sequence' => 'Sequence',
        'siteId' => 'SiteId',
        'uri' => 'Uri',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        if (null !== $this->uri) {
            $res['Uri'] = $this->uri;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        if (isset($map['Uri'])) {
            $model->uri = $map['Uri'];
        }

        return $model;
    }
}
