<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateHttpRequestHeaderModificationRuleRequest\requestHeaderModification;

class CreateHttpRequestHeaderModificationRuleRequest extends Model
{
    /**
     * @var requestHeaderModification[]
     */
    public $requestHeaderModification;
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
        'requestHeaderModification' => 'RequestHeaderModification',
        'rule'                      => 'Rule',
        'ruleEnable'                => 'RuleEnable',
        'ruleName'                  => 'RuleName',
        'siteId'                    => 'SiteId',
        'siteVersion'               => 'SiteVersion',
    ];

    public function validate()
    {
        if (\is_array($this->requestHeaderModification)) {
            Model::validateArray($this->requestHeaderModification);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestHeaderModification) {
            if (\is_array($this->requestHeaderModification)) {
                $res['RequestHeaderModification'] = [];
                $n1                               = 0;
                foreach ($this->requestHeaderModification as $item1) {
                    $res['RequestHeaderModification'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RequestHeaderModification'])) {
            if (!empty($map['RequestHeaderModification'])) {
                $model->requestHeaderModification = [];
                $n1                               = 0;
                foreach ($map['RequestHeaderModification'] as $item1) {
                    $model->requestHeaderModification[$n1++] = requestHeaderModification::fromMap($item1);
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

        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        if (isset($map['SiteVersion'])) {
            $model->siteVersion = $map['SiteVersion'];
        }

        return $model;
    }
}
