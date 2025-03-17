<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\ImageModerationResponseBody\data\ext\logoData;

use AlibabaCloud\Tea\Model;

class logo extends Model
{
    /**
     * @description The score of the confidence level. Valid values: 0 to 100. The value is accurate to two decimal places. Some labels do not have scores of confidence levels.
     *
     * @example 99.01
     *
     * @var float
     */
    public $confidence;

    /**
     * @description Logo category.
     *
     * @example xx
     *
     * @var string
     */
    public $label;

    /**
     * @description Logo name.
     *
     * @example xx
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'confidence' => 'Confidence',
        'label' => 'Label',
        'name' => 'Name',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->confidence) {
            $res['Confidence'] = $this->confidence;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Confidence'])) {
            $model->confidence = $map['Confidence'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
