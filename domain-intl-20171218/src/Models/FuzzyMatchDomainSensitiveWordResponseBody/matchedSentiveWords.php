<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domainintl\V20171218\Models\FuzzyMatchDomainSensitiveWordResponseBody;

use AlibabaCloud\SDK\Domainintl\V20171218\Models\FuzzyMatchDomainSensitiveWordResponseBody\matchedSentiveWords\matchedSensitiveWord;
use AlibabaCloud\Tea\Model;

class matchedSentiveWords extends Model
{
    /**
     * @var matchedSensitiveWord[]
     */
    public $matchedSensitiveWord;
    protected $_name = [
        'matchedSensitiveWord' => 'MatchedSensitiveWord',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->matchedSensitiveWord) {
            $res['MatchedSensitiveWord'] = [];
            if (null !== $this->matchedSensitiveWord && \is_array($this->matchedSensitiveWord)) {
                $n = 0;
                foreach ($this->matchedSensitiveWord as $item) {
                    $res['MatchedSensitiveWord'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return matchedSentiveWords
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MatchedSensitiveWord'])) {
            if (!empty($map['MatchedSensitiveWord'])) {
                $model->matchedSensitiveWord = [];
                $n                           = 0;
                foreach ($map['MatchedSensitiveWord'] as $item) {
                    $model->matchedSensitiveWord[$n++] = null !== $item ? matchedSensitiveWord::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
