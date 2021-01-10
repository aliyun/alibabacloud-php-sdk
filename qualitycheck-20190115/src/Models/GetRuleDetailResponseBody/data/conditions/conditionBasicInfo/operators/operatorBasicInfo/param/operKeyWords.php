<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDetailResponseBody\data\conditions\conditionBasicInfo\operators\operatorBasicInfo\param;

use AlibabaCloud\Tea\Model;

class operKeyWords extends Model
{
    /**
     * @var string[]
     */
    public $operKeyWord;
    protected $_name = [
        'operKeyWord' => 'OperKeyWord',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operKeyWord) {
            $res['OperKeyWord'] = $this->operKeyWord;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return operKeyWords
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OperKeyWord'])) {
            if (!empty($map['OperKeyWord'])) {
                $model->operKeyWord = $map['OperKeyWord'];
            }
        }

        return $model;
    }
}
