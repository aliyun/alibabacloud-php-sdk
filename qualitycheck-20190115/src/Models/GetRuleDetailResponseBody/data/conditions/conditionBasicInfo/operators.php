<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDetailResponseBody\data\conditions\conditionBasicInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDetailResponseBody\data\conditions\conditionBasicInfo\operators\operatorBasicInfo;

class operators extends Model
{
    /**
     * @var operatorBasicInfo[]
     */
    public $operatorBasicInfo;
    protected $_name = [
        'operatorBasicInfo' => 'OperatorBasicInfo',
    ];

    public function validate()
    {
        if (\is_array($this->operatorBasicInfo)) {
            Model::validateArray($this->operatorBasicInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->operatorBasicInfo) {
            if (\is_array($this->operatorBasicInfo)) {
                $res['OperatorBasicInfo'] = [];
                $n1 = 0;
                foreach ($this->operatorBasicInfo as $item1) {
                    $res['OperatorBasicInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['OperatorBasicInfo'])) {
            if (!empty($map['OperatorBasicInfo'])) {
                $model->operatorBasicInfo = [];
                $n1 = 0;
                foreach ($map['OperatorBasicInfo'] as $item1) {
                    $model->operatorBasicInfo[$n1] = operatorBasicInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
