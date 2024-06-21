<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models\GetDocumentRankResponseBody\result;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return scores
     */
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
