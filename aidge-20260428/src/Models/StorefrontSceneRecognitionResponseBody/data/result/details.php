<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models\StorefrontSceneRecognitionResponseBody\data\result;

use AlibabaCloud\Dara\Model;

class details extends Model
{
    /**
     * @var string
     */
    public $clazz;

    /**
     * @var float
     */
    public $confidence;
    protected $_name = [
        'clazz' => 'Clazz',
        'confidence' => 'Confidence',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clazz) {
            $res['Clazz'] = $this->clazz;
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
        if (isset($map['Clazz'])) {
            $model->clazz = $map['Clazz'];
        }

        if (isset($map['Confidence'])) {
            $model->confidence = $map['Confidence'];
        }

        return $model;
    }
}
