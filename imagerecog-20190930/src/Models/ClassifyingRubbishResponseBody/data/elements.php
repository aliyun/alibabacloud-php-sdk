<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imagerecog\V20190930\Models\ClassifyingRubbishResponseBody\data;

use AlibabaCloud\Tea\Model;

class elements extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @example 0.9406
     *
     * @var float
     */
    public $categoryScore;

    /**
     * @var string
     */
    public $rubbish;

    /**
     * @example 0.9406
     *
     * @var float
     */
    public $rubbishScore;
    protected $_name = [
        'category'      => 'Category',
        'categoryScore' => 'CategoryScore',
        'rubbish'       => 'Rubbish',
        'rubbishScore'  => 'RubbishScore',
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

    /**
     * @param array $map
     *
     * @return elements
     */
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
