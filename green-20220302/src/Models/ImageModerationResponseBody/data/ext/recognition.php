<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\ImageModerationResponseBody\data\ext;

use AlibabaCloud\Tea\Model;

class recognition extends Model
{
    /**
     * @var string
     */
    public $classification;

    /**
     * @var float
     */
    public $confidence;
    protected $_name = [
        'classification' => 'Classification',
        'confidence'     => 'Confidence',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->classification) {
            $res['Classification'] = $this->classification;
        }
        if (null !== $this->confidence) {
            $res['Confidence'] = $this->confidence;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recognition
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Classification'])) {
            $model->classification = $map['Classification'];
        }
        if (isset($map['Confidence'])) {
            $model->confidence = $map['Confidence'];
        }

        return $model;
    }
}
