<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\DetectChefCapResponseBody\data;

use AlibabaCloud\Tea\Model;

class elements extends Model
{
    /**
     * @var float
     */
    public $confidence;

    /**
     * @var string
     */
    public $category;

    /**
     * @var float[]
     */
    public $box;
    protected $_name = [
        'confidence' => 'Confidence',
        'category'   => 'Category',
        'box'        => 'Box',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->confidence) {
            $res['Confidence'] = $this->confidence;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->box) {
            $res['Box'] = $this->box;
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
        if (isset($map['Confidence'])) {
            $model->confidence = $map['Confidence'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Box'])) {
            if (!empty($map['Box'])) {
                $model->box = $map['Box'];
            }
        }

        return $model;
    }
}
