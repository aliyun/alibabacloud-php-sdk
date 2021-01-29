<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizePoiNameResponseBody\data;

use AlibabaCloud\Tea\Model;

class summary extends Model
{
    /**
     * @var string
     */
    public $brand;

    /**
     * @var float
     */
    public $score;
    protected $_name = [
        'brand' => 'Brand',
        'score' => 'Score',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->brand) {
            $res['Brand'] = $this->brand;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return summary
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Brand'])) {
            $model->brand = $map['Brand'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }

        return $model;
    }
}
