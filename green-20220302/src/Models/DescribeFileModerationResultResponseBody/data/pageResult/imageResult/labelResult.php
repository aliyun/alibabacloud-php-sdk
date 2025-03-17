<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\DescribeFileModerationResultResponseBody\data\pageResult\imageResult;

use AlibabaCloud\Tea\Model;

class labelResult extends Model
{
    /**
     * @description The score of the confidence level. Valid values: 0 to 100. The value is accurate to two decimal places.
     *
     * @example 25.0
     *
     * @var float
     */
    public $confidence;

    /**
     * @description The description.
     *
     * @example This is a title.
     *
     * @var string
     */
    public $description;

    /**
     * @description The details of the labels.
     *
     * @example nonlabel
     *
     * @var string
     */
    public $label;
    protected $_name = [
        'confidence' => 'Confidence',
        'description' => 'Description',
        'label' => 'Label',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->confidence) {
            $res['Confidence'] = $this->confidence;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return labelResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Confidence'])) {
            $model->confidence = $map['Confidence'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }

        return $model;
    }
}
