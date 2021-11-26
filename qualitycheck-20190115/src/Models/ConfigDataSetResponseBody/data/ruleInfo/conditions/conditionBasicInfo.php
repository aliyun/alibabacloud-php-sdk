<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ConfigDataSetResponseBody\data\ruleInfo\conditions;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ConfigDataSetResponseBody\data\ruleInfo\conditions\conditionBasicInfo\checkRange;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ConfigDataSetResponseBody\data\ruleInfo\conditions\conditionBasicInfo\operators;
use AlibabaCloud\Tea\Model;

class conditionBasicInfo extends Model
{
    /**
     * @var checkRange
     */
    public $checkRange;

    /**
     * @var string
     */
    public $cid;

    /**
     * @var string
     */
    public $lambda;

    /**
     * @var operators
     */
    public $operators;
    protected $_name = [
        'checkRange' => 'CheckRange',
        'cid'        => 'Cid',
        'lambda'     => 'Lambda',
        'operators'  => 'Operators',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkRange) {
            $res['CheckRange'] = null !== $this->checkRange ? $this->checkRange->toMap() : null;
        }
        if (null !== $this->cid) {
            $res['Cid'] = $this->cid;
        }
        if (null !== $this->lambda) {
            $res['Lambda'] = $this->lambda;
        }
        if (null !== $this->operators) {
            $res['Operators'] = null !== $this->operators ? $this->operators->toMap() : null;
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
        if (isset($map['CheckRange'])) {
            $model->checkRange = checkRange::fromMap($map['CheckRange']);
        }
        if (isset($map['Cid'])) {
            $model->cid = $map['Cid'];
        }
        if (isset($map['Lambda'])) {
            $model->lambda = $map['Lambda'];
        }
        if (isset($map['Operators'])) {
            $model->operators = operators::fromMap($map['Operators']);
        }

        return $model;
    }
}
