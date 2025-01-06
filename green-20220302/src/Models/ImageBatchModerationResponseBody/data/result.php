<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\ImageBatchModerationResponseBody\data;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description Confidence score, ranging from 0 to 100, retained to two decimal places. Some labels do not have a confidence score.
     *
     * @example 81.22
     *
     * @var float
     */
    public $confidence;

    /**
     * @description Description.
     *
     * @example No risk detected
     *
     * @var string
     */
    public $description;

    /**
     * @description The labels returned after image content detection. A single image may be associated with multiple labels and corresponding scores.
     *
     * @example violent_explosion
     *
     * @var string
     */
    public $label;
    protected $_name = [
        'confidence'  => 'Confidence',
        'description' => 'Description',
        'label'       => 'Label',
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
     * @return result
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
