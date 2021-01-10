<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetAsrVocabResponseBody\data\words;

use AlibabaCloud\Tea\Model;

class word extends Model
{
    /**
     * @var int
     */
    public $weight;

    /**
     * @var string
     */
    public $word;
    protected $_name = [
        'weight' => 'Weight',
        'word'   => 'Word',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }
        if (null !== $this->word) {
            $res['Word'] = $this->word;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return word
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }
        if (isset($map['Word'])) {
            $model->word = $map['Word'];
        }

        return $model;
    }
}
