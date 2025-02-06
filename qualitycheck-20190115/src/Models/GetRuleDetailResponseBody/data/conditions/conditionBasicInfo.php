<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDetailResponseBody\data\conditions;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDetailResponseBody\data\conditions\conditionBasicInfo\checkRange;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDetailResponseBody\data\conditions\conditionBasicInfo\operators;

class conditionBasicInfo extends Model
{
    /**
     * @var checkRange
     */
    public $checkRange;
    /**
     * @var string
     */
    public $conditionInfoCid;
    /**
     * @var string
     */
    public $operLambda;
    /**
     * @var operators
     */
    public $operators;
    protected $_name = [
        'checkRange'       => 'CheckRange',
        'conditionInfoCid' => 'ConditionInfoCid',
        'operLambda'       => 'OperLambda',
        'operators'        => 'Operators',
    ];

    public function validate()
    {
        if (null !== $this->checkRange) {
            $this->checkRange->validate();
        }
        if (null !== $this->operators) {
            $this->operators->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkRange) {
            $res['CheckRange'] = null !== $this->checkRange ? $this->checkRange->toArray($noStream) : $this->checkRange;
        }

        if (null !== $this->conditionInfoCid) {
            $res['ConditionInfoCid'] = $this->conditionInfoCid;
        }

        if (null !== $this->operLambda) {
            $res['OperLambda'] = $this->operLambda;
        }

        if (null !== $this->operators) {
            $res['Operators'] = null !== $this->operators ? $this->operators->toArray($noStream) : $this->operators;
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
        if (isset($map['CheckRange'])) {
            $model->checkRange = checkRange::fromMap($map['CheckRange']);
        }

        if (isset($map['ConditionInfoCid'])) {
            $model->conditionInfoCid = $map['ConditionInfoCid'];
        }

        if (isset($map['OperLambda'])) {
            $model->operLambda = $map['OperLambda'];
        }

        if (isset($map['Operators'])) {
            $model->operators = operators::fromMap($map['Operators']);
        }

        return $model;
    }
}
