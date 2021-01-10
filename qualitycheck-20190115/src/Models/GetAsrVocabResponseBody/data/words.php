<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetAsrVocabResponseBody\data;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetAsrVocabResponseBody\data\words\word;
use AlibabaCloud\Tea\Model;

class words extends Model
{
    /**
     * @var word[]
     */
    public $word;
    protected $_name = [
        'word' => 'Word',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->word) {
            $res['Word'] = [];
            if (null !== $this->word && \is_array($this->word)) {
                $n = 0;
                foreach ($this->word as $item) {
                    $res['Word'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return words
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Word'])) {
            if (!empty($map['Word'])) {
                $model->word = [];
                $n           = 0;
                foreach ($map['Word'] as $item) {
                    $model->word[$n++] = null !== $item ? word::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
