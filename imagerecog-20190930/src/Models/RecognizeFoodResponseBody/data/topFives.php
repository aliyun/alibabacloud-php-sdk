<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imagerecog\V20190930\Models\RecognizeFoodResponseBody\data;

use AlibabaCloud\Tea\Model;

class topFives extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var float
     */
    public $score;

    /**
     * @var string
     */
    public $calorie;
    protected $_name = [
        'category' => 'Category',
        'score'    => 'Score',
        'calorie'  => 'Calorie',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->calorie) {
            $res['Calorie'] = $this->calorie;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return topFives
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['Calorie'])) {
            $model->calorie = $map['Calorie'];
        }

        return $model;
    }
}
