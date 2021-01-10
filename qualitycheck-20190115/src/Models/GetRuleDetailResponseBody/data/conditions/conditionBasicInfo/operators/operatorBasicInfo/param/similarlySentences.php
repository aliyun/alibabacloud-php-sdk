<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDetailResponseBody\data\conditions\conditionBasicInfo\operators\operatorBasicInfo\param;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->similarlySentence) {
            $res['SimilarlySentence'] = $this->similarlySentence;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return similarlySentences
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SimilarlySentence'])) {
            if (!empty($map['SimilarlySentence'])) {
                $model->similarlySentence = $map['SimilarlySentence'];
            }
        }

        return $model;
    }
}
