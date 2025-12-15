<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models\GetMultiModalRerankerResponseBody\result;

use AlibabaCloud\Dara\Model;

class scores extends Model
{
    /**
     * @var int
     */
    public $index;

    /**
     * @var float
     */
    public $score;
    protected $_name = [
        'index' => 'index',
        'score' => 'score',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->index) {
            $res['index'] = $this->index;
        }

        if (null !== $this->score) {
            $res['score'] = $this->score;
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
        if (isset($map['index'])) {
            $model->index = $map['index'];
        }

        if (isset($map['score'])) {
            $model->score = $map['score'];
        }

        return $model;
    }
}
