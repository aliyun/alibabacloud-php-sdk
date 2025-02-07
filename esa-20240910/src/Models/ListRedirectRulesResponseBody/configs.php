<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListRedirectRulesResponseBody;

use AlibabaCloud\Dara\Model;

class configs extends Model
{
    /**
     * @var int
     */
    public $configId;
    /**
     * @var string
     */
    public $configType;
    /**
     * @var string
     */
    public $reserveQueryString;
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
    public $siteVersion;
    /**
     * @var string
     */
    public $statusCode;
    /**
     * @var string
     */
    public $targetUrl;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'configId'           => 'ConfigId',
        'configType'         => 'ConfigType',
        'reserveQueryString' => 'ReserveQueryString',
        'rule'               => 'Rule',
        'ruleEnable'         => 'RuleEnable',
        'ruleName'           => 'RuleName',
        'sequence'           => 'Sequence',
        'siteVersion'        => 'SiteVersion',
        'statusCode'         => 'StatusCode',
        'targetUrl'          => 'TargetUrl',
        'type'               => 'Type',
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
