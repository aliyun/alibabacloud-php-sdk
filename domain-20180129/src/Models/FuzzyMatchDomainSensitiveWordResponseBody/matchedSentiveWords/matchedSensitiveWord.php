<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\FuzzyMatchDomainSensitiveWordResponseBody\matchedSentiveWords;

use AlibabaCloud\Dara\Model;

class matchedSensitiveWord extends Model
{
    /**
     * @var string
     */
    public $word;
    protected $_name = [
        'word' => 'Word',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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
        if (isset($map['Word'])) {
            $model->word = $map['Word'];
        }

        return $model;
    }
}
