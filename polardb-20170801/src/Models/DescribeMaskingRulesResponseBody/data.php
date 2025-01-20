<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeMaskingRulesResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $ruleList;
    /**
     * @var string
     */
    public $ruleVersion;
    protected $_name = [
        'ruleList'    => 'RuleList',
        'ruleVersion' => 'RuleVersion',
    ];

    public function validate()
    {
        if (\is_array($this->ruleList)) {
            Model::validateArray($this->ruleList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ruleList) {
            if (\is_array($this->ruleList)) {
                $res['RuleList'] = [];
                $n1              = 0;
                foreach ($this->ruleList as $item1) {
                    $res['RuleList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->ruleVersion) {
            $res['RuleVersion'] = $this->ruleVersion;
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
        if (isset($map['RuleList'])) {
            if (!empty($map['RuleList'])) {
                $model->ruleList = [];
                $n1              = 0;
                foreach ($map['RuleList'] as $item1) {
                    $model->ruleList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RuleVersion'])) {
            $model->ruleVersion = $map['RuleVersion'];
        }

        return $model;
    }
}
