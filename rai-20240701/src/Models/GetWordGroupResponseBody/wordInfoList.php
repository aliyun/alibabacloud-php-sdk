<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models\GetWordGroupResponseBody;

use AlibabaCloud\Dara\Model;

class wordInfoList extends Model
{
    /**
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $word;

    /**
     * @var int
     */
    public $wordId;
    protected $_name = [
        'label' => 'Label',
        'word' => 'Word',
        'wordId' => 'WordId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }

        if (null !== $this->word) {
            $res['Word'] = $this->word;
        }

        if (null !== $this->wordId) {
            $res['WordId'] = $this->wordId;
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
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }

        if (isset($map['Word'])) {
            $model->word = $map['Word'];
        }

        if (isset($map['WordId'])) {
            $model->wordId = $map['WordId'];
        }

        return $model;
    }
}
