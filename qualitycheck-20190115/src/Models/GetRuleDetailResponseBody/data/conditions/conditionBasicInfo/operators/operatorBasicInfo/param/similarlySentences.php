<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDetailResponseBody\data\conditions\conditionBasicInfo\operators\operatorBasicInfo\param;

use AlibabaCloud\Dara\Model;

class similarlySentences extends Model
{
    /**
     * @var string[]
     */
    public $similarlySentence;
    protected $_name = [
        'similarlySentence' => 'SimilarlySentence',
    ];

    public function validate()
    {
        if (\is_array($this->similarlySentence)) {
            Model::validateArray($this->similarlySentence);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->similarlySentence) {
            if (\is_array($this->similarlySentence)) {
                $res['SimilarlySentence'] = [];
                $n1 = 0;
                foreach ($this->similarlySentence as $item1) {
                    $res['SimilarlySentence'][$n1] = $item1;
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
        if (isset($map['SimilarlySentence'])) {
            if (!empty($map['SimilarlySentence'])) {
                $model->similarlySentence = [];
                $n1 = 0;
                foreach ($map['SimilarlySentence'] as $item1) {
                    $model->similarlySentence[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
