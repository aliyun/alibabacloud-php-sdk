<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetHttpRequestHeaderModificationRuleResponseBody\requestHeaderModification;

class GetHttpRequestHeaderModificationRuleResponseBody extends Model
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
     * @var requestHeaderModification[]
     */
    public $requestHeaderModification;
    /**
     * @var string
     */
    public $requestId;
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
    protected $_name = [
        'configId'                  => 'ConfigId',
        'configType'                => 'ConfigType',
        'requestHeaderModification' => 'RequestHeaderModification',
        'requestId'                 => 'RequestId',
        'rule'                      => 'Rule',
        'ruleEnable'                => 'RuleEnable',
        'ruleName'                  => 'RuleName',
        'sequence'                  => 'Sequence',
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
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }

        if (null !== $this->configType) {
            $res['ConfigType'] = $this->configType;
        }

        if (null !== $this->requestHeaderModification) {
            if (\is_array($this->requestHeaderModification)) {
                $res['RequestHeaderModification'] = [];
                $n1                               = 0;
                foreach ($this->requestHeaderModification as $item1) {
                    $res['RequestHeaderModification'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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

        if (isset($map['RequestHeaderModification'])) {
            if (!empty($map['RequestHeaderModification'])) {
                $model->requestHeaderModification = [];
                $n1                               = 0;
                foreach ($map['RequestHeaderModification'] as $item1) {
                    $model->requestHeaderModification[$n1++] = requestHeaderModification::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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

        return $model;
    }
}
