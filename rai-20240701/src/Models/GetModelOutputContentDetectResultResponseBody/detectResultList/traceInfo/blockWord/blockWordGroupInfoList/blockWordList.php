<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models\GetModelOutputContentDetectResultResponseBody\detectResultList\traceInfo\blockWord\blockWordGroupInfoList;

use AlibabaCloud\Dara\Model;

class blockWordList extends Model
{
    /**
     * @var string
     */
    public $word;

    /**
     * @var string
     */
    public $wordLabel;
    protected $_name = [
        'word' => 'Word',
        'wordLabel' => 'WordLabel',
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

        if (null !== $this->wordLabel) {
            $res['WordLabel'] = $this->wordLabel;
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

        if (isset($map['WordLabel'])) {
            $model->wordLabel = $map['WordLabel'];
        }

        return $model;
    }
}
