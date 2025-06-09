<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseRuleResponseBody;

use AlibabaCloud\Dara\Model;

class rule extends Model
{
    /**
     * @var string
     */
    public $config;

    /**
     * @var string
     */
    public $defenseOrigin;

    /**
     * @var string
     */
    public $defenseScene;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $resource;

    /**
     * @var int
     */
    public $ruleId;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $templateId;
    protected $_name = [
        'config' => 'Config',
        'defenseOrigin' => 'DefenseOrigin',
        'defenseScene' => 'DefenseScene',
        'gmtModified' => 'GmtModified',
        'resource' => 'Resource',
        'ruleId' => 'RuleId',
        'ruleName' => 'RuleName',
        'status' => 'Status',
        'templateId' => 'TemplateId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }

        if (null !== $this->defenseOrigin) {
            $res['DefenseOrigin'] = $this->defenseOrigin;
        }

        if (null !== $this->defenseScene) {
            $res['DefenseScene'] = $this->defenseScene;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->resource) {
            $res['Resource'] = $this->resource;
        }

        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
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
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }

        if (isset($map['DefenseOrigin'])) {
            $model->defenseOrigin = $map['DefenseOrigin'];
        }

        if (isset($map['DefenseScene'])) {
            $model->defenseScene = $map['DefenseScene'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['Resource'])) {
            $model->resource = $map['Resource'];
        }

        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
