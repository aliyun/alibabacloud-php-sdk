<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetAsrVocabResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetAsrVocabResponseBody\data\words\word;

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
        if (\is_array($this->word)) {
            Model::validateArray($this->word);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->word) {
            if (\is_array($this->word)) {
                $res['Word'] = [];
                $n1 = 0;
                foreach ($this->word as $item1) {
                    $res['Word'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Word'])) {
            if (!empty($map['Word'])) {
                $model->word = [];
                $n1 = 0;
                foreach ($map['Word'] as $item1) {
                    $model->word[$n1++] = word::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
