<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\GetVocabResponseBody\data;

use AlibabaCloud\Dara\Model;

class wordWeightList extends Model
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
        'weight' => 'weight',
        'word'   => 'word',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->weight) {
            $res['weight'] = $this->weight;
        }

        if (null !== $this->word) {
            $res['word'] = $this->word;
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
        if (isset($map['weight'])) {
            $model->weight = $map['weight'];
        }

        if (isset($map['word'])) {
            $model->word = $map['word'];
        }

        return $model;
    }
}
