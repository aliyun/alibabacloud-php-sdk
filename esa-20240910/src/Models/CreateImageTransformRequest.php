<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class CreateImageTransformRequest extends Model
{
    /**
     * @var string
     */
    public $enable;
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
    public $siteId;
    /**
     * @var int
     */
    public $siteVersion;
    protected $_name = [
        'enable'      => 'Enable',
        'rule'        => 'Rule',
        'ruleEnable'  => 'RuleEnable',
        'ruleName'    => 'RuleName',
        'siteId'      => 'SiteId',
        'siteVersion' => 'SiteVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
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
