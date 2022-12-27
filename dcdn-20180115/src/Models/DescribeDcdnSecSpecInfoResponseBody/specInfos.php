<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnSecSpecInfoResponseBody;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnSecSpecInfoResponseBody\specInfos\ruleConfigs;
use AlibabaCloud\Tea\Model;

class specInfos extends Model
{
    /**
     * @example accurate_***
     *
     * @var string
     */
    public $ruleCode;

    /**
     * @var ruleConfigs[]
     */
    public $ruleConfigs;
    protected $_name = [
        'ruleCode'    => 'RuleCode',
        'ruleConfigs' => 'RuleConfigs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleCode) {
            $res['RuleCode'] = $this->ruleCode;
        }
        if (null !== $this->ruleConfigs) {
            $res['RuleConfigs'] = [];
            if (null !== $this->ruleConfigs && \is_array($this->ruleConfigs)) {
                $n = 0;
                foreach ($this->ruleConfigs as $item) {
                    $res['RuleConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return specInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RuleCode'])) {
            $model->ruleCode = $map['RuleCode'];
        }
        if (isset($map['RuleConfigs'])) {
            if (!empty($map['RuleConfigs'])) {
                $model->ruleConfigs = [];
                $n                  = 0;
                foreach ($map['RuleConfigs'] as $item) {
                    $model->ruleConfigs[$n++] = null !== $item ? ruleConfigs::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
