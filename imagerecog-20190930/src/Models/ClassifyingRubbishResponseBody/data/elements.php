<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imagerecog\V20190930\Models\ClassifyingRubbishResponseBody\data;

use AlibabaCloud\Tea\Model;

class elements extends Model
{
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

    /**
     * @var string
     */
    public $category;
    protected $_name = [
        'categoryScore' => 'CategoryScore',
        'rubbish'       => 'Rubbish',
        'rubbishScore'  => 'RubbishScore',
        'category'      => 'Category',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categoryScore) {
            $res['CategoryScore'] = $this->categoryScore;
        }
        if (null !== $this->rubbish) {
            $res['Rubbish'] = $this->rubbish;
        }
        if (null !== $this->rubbishScore) {
            $res['RubbishScore'] = $this->rubbishScore;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return elements
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CategoryScore'])) {
            $model->categoryScore = $map['CategoryScore'];
        }
        if (isset($map['Rubbish'])) {
            $model->rubbish = $map['Rubbish'];
        }
        if (isset($map['RubbishScore'])) {
            $model->rubbishScore = $map['RubbishScore'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        return $model;
    }
}
