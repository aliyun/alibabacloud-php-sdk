<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\NluResponseBody\messages\dialogHubNluInfo;

use AlibabaCloud\Tea\Model;

class globalDictList extends Model
{
    /**
     * @example 天气
     *
     * @var string
     */
    public $standardWord;

    /**
     * @example 天气
     *
     * @var string
     */
    public $word;
    protected $_name = [
        'standardWord' => 'StandardWord',
        'word'         => 'Word',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->standardWord) {
            $res['StandardWord'] = $this->standardWord;
        }
        if (null !== $this->word) {
            $res['Word'] = $this->word;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return globalDictList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StandardWord'])) {
            $model->standardWord = $map['StandardWord'];
        }
        if (isset($map['Word'])) {
            $model->word = $map['Word'];
        }

        return $model;
    }
}
