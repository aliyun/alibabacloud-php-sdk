<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\NluResponseBody\messages\dialogHubNluInfo;

use AlibabaCloud\Dara\Model;

class globalDictList extends Model
{
    /**
     * @var string
     */
    public $standardWord;

    /**
     * @var string
     */
    public $word;
    protected $_name = [
        'standardWord' => 'StandardWord',
        'word' => 'Word',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
