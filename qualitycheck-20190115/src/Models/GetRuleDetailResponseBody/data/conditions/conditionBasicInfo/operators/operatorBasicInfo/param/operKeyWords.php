<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDetailResponseBody\data\conditions\conditionBasicInfo\operators\operatorBasicInfo\param;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->operKeyWord)) {
            Model::validateArray($this->operKeyWord);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->operKeyWord) {
            if (\is_array($this->operKeyWord)) {
                $res['OperKeyWord'] = [];
                $n1 = 0;
                foreach ($this->operKeyWord as $item1) {
                    $res['OperKeyWord'][$n1] = $item1;
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
        if (isset($map['OperKeyWord'])) {
            if (!empty($map['OperKeyWord'])) {
                $model->operKeyWord = [];
                $n1 = 0;
                foreach ($map['OperKeyWord'] as $item1) {
                    $model->operKeyWord[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
