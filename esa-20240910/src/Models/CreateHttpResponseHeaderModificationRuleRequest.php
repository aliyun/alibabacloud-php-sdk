<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateHttpResponseHeaderModificationRuleRequest\responseHeaderModification;

class CreateHttpResponseHeaderModificationRuleRequest extends Model
{
    /**
     * @var responseHeaderModification[]
     */
    public $responseHeaderModification;

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
     * @var int
     */
    public $siteVersion;
    protected $_name = [
        'responseHeaderModification' => 'ResponseHeaderModification',
        'rule' => 'Rule',
        'ruleEnable' => 'RuleEnable',
        'ruleName' => 'RuleName',
        'sequence' => 'Sequence',
        'siteId' => 'SiteId',
        'siteVersion' => 'SiteVersion',
    ];

    public function validate()
    {
        if (\is_array($this->responseHeaderModification)) {
            Model::validateArray($this->responseHeaderModification);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->responseHeaderModification) {
            if (\is_array($this->responseHeaderModification)) {
                $res['ResponseHeaderModification'] = [];
                $n1 = 0;
                foreach ($this->responseHeaderModification as $item1) {
                    $res['ResponseHeaderModification'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['ResponseHeaderModification'])) {
            if (!empty($map['ResponseHeaderModification'])) {
                $model->responseHeaderModification = [];
                $n1 = 0;
                foreach ($map['ResponseHeaderModification'] as $item1) {
                    $model->responseHeaderModification[$n1++] = responseHeaderModification::fromMap($item1);
                }
            }
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

        if (isset($map['SiteVersion'])) {
            $model->siteVersion = $map['SiteVersion'];
        }

        return $model;
    }
}
