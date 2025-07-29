<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunEssayCorrectionResponseBody\payload;

use AlibabaCloud\Tea\Model;

class output extends Model
{
    /**
     * @example 50
     *
     * @var int
     */
    public $score;

    /**
     * @var string
     */
    public $text;
    protected $_name = [
        'score' => 'score',
        'text' => 'text',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->score) {
            $res['score'] = $this->score;
        }
        if (null !== $this->text) {
            $res['text'] = $this->text;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return output
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['score'])) {
            $model->score = $map['score'];
        }
        if (isset($map['text'])) {
            $model->text = $map['text'];
        }

        return $model;
    }
}
