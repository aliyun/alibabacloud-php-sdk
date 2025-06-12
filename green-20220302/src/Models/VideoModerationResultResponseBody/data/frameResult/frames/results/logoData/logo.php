<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationResultResponseBody\data\frameResult\frames\results\logoData;

use AlibabaCloud\Dara\Model;

class logo extends Model
{
    /**
     * @var int
     */
    public $confidence;

    /**
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'confidence' => 'confidence',
        'label' => 'label',
        'name' => 'name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->confidence) {
            $res['confidence'] = $this->confidence;
        }

        if (null !== $this->label) {
            $res['label'] = $this->label;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (isset($map['confidence'])) {
            $model->confidence = $map['confidence'];
        }

        if (isset($map['label'])) {
            $model->label = $map['label'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
