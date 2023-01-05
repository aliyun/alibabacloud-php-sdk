<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imagerecog\V20190930\Models\RecognizeImageColorResponseBody\data;

use AlibabaCloud\Tea\Model;

class colorTemplateList extends Model
{
    /**
     * @example 270315
     *
     * @var string
     */
    public $color;

    /**
     * @example red
     *
     * @var string
     */
    public $label;

    /**
     * @example 0.459527
     *
     * @var float
     */
    public $percentage;
    protected $_name = [
        'color'      => 'Color',
        'label'      => 'Label',
        'percentage' => 'Percentage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->color) {
            $res['Color'] = $this->color;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->percentage) {
            $res['Percentage'] = $this->percentage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return colorTemplateList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Color'])) {
            $model->color = $map['Color'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Percentage'])) {
            $model->percentage = $map['Percentage'];
        }

        return $model;
    }
}
