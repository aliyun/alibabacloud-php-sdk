<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDetailResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDetailResponseBody\data\conditions\conditionBasicInfo;

class conditions extends Model
{
    /**
     * @var conditionBasicInfo[]
     */
    public $conditionBasicInfo;
    protected $_name = [
        'conditionBasicInfo' => 'ConditionBasicInfo',
    ];

    public function validate()
    {
        if (\is_array($this->conditionBasicInfo)) {
            Model::validateArray($this->conditionBasicInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->conditionBasicInfo) {
            if (\is_array($this->conditionBasicInfo)) {
                $res['ConditionBasicInfo'] = [];
                $n1                        = 0;
                foreach ($this->conditionBasicInfo as $item1) {
                    $res['ConditionBasicInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ConditionBasicInfo'])) {
            if (!empty($map['ConditionBasicInfo'])) {
                $model->conditionBasicInfo = [];
                $n1                        = 0;
                foreach ($map['ConditionBasicInfo'] as $item1) {
                    $model->conditionBasicInfo[$n1++] = conditionBasicInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
