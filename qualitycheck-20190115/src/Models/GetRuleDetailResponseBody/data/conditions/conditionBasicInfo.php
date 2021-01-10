<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDetailResponseBody\data\conditions;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDetailResponseBody\data\conditions\conditionBasicInfo\checkRange;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDetailResponseBody\data\conditions\conditionBasicInfo\operators;
use AlibabaCloud\Tea\Model;

class conditionBasicInfo extends Model
{
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

    /**
     * @var checkRange
     */
    public $checkRange;
    protected $_name = [
        'conditionInfoCid' => 'ConditionInfoCid',
        'operLambda'       => 'OperLambda',
        'operators'        => 'Operators',
        'checkRange'       => 'CheckRange',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conditionInfoCid) {
            $res['ConditionInfoCid'] = $this->conditionInfoCid;
        }
        if (null !== $this->operLambda) {
            $res['OperLambda'] = $this->operLambda;
        }
        if (null !== $this->operators) {
            $res['Operators'] = null !== $this->operators ? $this->operators->toMap() : null;
        }
        if (null !== $this->checkRange) {
            $res['CheckRange'] = null !== $this->checkRange ? $this->checkRange->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return conditionBasicInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConditionInfoCid'])) {
            $model->conditionInfoCid = $map['ConditionInfoCid'];
        }
        if (isset($map['OperLambda'])) {
            $model->operLambda = $map['OperLambda'];
        }
        if (isset($map['Operators'])) {
            $model->operators = operators::fromMap($map['Operators']);
        }
        if (isset($map['CheckRange'])) {
            $model->checkRange = checkRange::fromMap($map['CheckRange']);
        }

        return $model;
    }
}
