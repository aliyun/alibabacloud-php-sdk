<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imagerecog\V20190930\Models\RecognizeFoodResponseBody\data;

use AlibabaCloud\Dara\Model;

class topFives extends Model
{
    /**
     * @var string
     */
    public $calorie;

    /**
     * @var string
     */
    public $category;

    /**
     * @var float
     */
    public $score;
    protected $_name = [
        'calorie' => 'Calorie',
        'category' => 'Category',
        'score' => 'Score',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->calorie) {
            $res['Calorie'] = $this->calorie;
        }

        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->score) {
            $res['Score'] = $this->score;
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
        if (isset($map['Calorie'])) {
            $model->calorie = $map['Calorie'];
        }

        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }

        return $model;
    }
}
