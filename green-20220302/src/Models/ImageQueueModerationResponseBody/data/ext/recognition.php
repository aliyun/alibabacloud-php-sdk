<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\ImageQueueModerationResponseBody\data\ext;

use AlibabaCloud\Dara\Model;

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
        'confidence' => 'Confidence',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
