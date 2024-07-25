<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationResultResponseBody\data\frameResult\frames\results;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The score of the confidence level. Valid values: 0 to 100. The value is accurate to two decimal places.
     *
     * @example 50
     *
     * @var float
     */
    public $confidence;

    /**
     * @description The label returned after a frame is moderated. Multiple risk labels and the corresponding scores of confidence levels may be returned for a frame.
     *
     * @example bloody
     *
     * @var string
     */
    public $label;
    protected $_name = [
        'confidence' => 'Confidence',
        'label'      => 'Label',
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
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }

        return $model;
    }
}
