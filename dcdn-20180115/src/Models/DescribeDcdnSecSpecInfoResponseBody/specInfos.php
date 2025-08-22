<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnSecSpecInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnSecSpecInfoResponseBody\specInfos\ruleConfigs;

class specInfos extends Model
{
    /**
     * @var string
     */
    public $ruleCode;

    /**
     * @var ruleConfigs[]
     */
    public $ruleConfigs;
    protected $_name = [
        'ruleCode' => 'RuleCode',
        'ruleConfigs' => 'RuleConfigs',
    ];

    public function validate()
    {
        if (\is_array($this->ruleConfigs)) {
            Model::validateArray($this->ruleConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ruleCode) {
            $res['RuleCode'] = $this->ruleCode;
        }

        if (null !== $this->ruleConfigs) {
            if (\is_array($this->ruleConfigs)) {
                $res['RuleConfigs'] = [];
                $n1 = 0;
                foreach ($this->ruleConfigs as $item1) {
                    $res['RuleConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['RuleCode'])) {
            $model->ruleCode = $map['RuleCode'];
        }

        if (isset($map['RuleConfigs'])) {
            if (!empty($map['RuleConfigs'])) {
                $model->ruleConfigs = [];
                $n1 = 0;
                foreach ($map['RuleConfigs'] as $item1) {
                    $model->ruleConfigs[$n1] = ruleConfigs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
