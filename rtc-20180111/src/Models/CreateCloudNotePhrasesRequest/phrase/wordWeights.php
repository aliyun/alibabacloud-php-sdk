<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\CreateCloudNotePhrasesRequest\phrase;

use AlibabaCloud\Tea\Model;

class wordWeights extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 0
     *
     * @var int
     */
    public $weight;

    /**
     * @description This parameter is required.
     *
     * @example 苹果
     *
     * @var string
     */
    public $word;
    protected $_name = [
        'weight' => 'Weight',
        'word' => 'Word',
    ];

    public function validate() {}

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
     * @return wordWeights
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
