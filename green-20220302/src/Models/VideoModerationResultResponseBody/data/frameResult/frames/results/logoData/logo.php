<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationResultResponseBody\data\frameResult\frames\results\logoData;

use AlibabaCloud\Tea\Model;

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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return logo
     */
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
