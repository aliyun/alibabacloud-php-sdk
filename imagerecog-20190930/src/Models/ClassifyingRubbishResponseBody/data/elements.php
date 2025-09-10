<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imagerecog\V20190930\Models\ClassifyingRubbishResponseBody\data;

use AlibabaCloud\Dara\Model;

class elements extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var float
     */
    public $categoryScore;

    /**
     * @var string
     */
    public $rubbish;

    /**
     * @var float
     */
    public $rubbishScore;
    protected $_name = [
        'category' => 'Category',
        'categoryScore' => 'CategoryScore',
        'rubbish' => 'Rubbish',
        'rubbishScore' => 'RubbishScore',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->categoryScore) {
            $res['CategoryScore'] = $this->categoryScore;
        }

        if (null !== $this->rubbish) {
            $res['Rubbish'] = $this->rubbish;
        }

        if (null !== $this->rubbishScore) {
            $res['RubbishScore'] = $this->rubbishScore;
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
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['CategoryScore'])) {
            $model->categoryScore = $map['CategoryScore'];
        }

        if (isset($map['Rubbish'])) {
            $model->rubbish = $map['Rubbish'];
        }

        if (isset($map['RubbishScore'])) {
            $model->rubbishScore = $map['RubbishScore'];
        }

        return $model;
    }
}
