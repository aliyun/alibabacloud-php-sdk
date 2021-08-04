<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imagerecog\V20190930\Models\TaggingAdImageResponseBody\data;

use AlibabaCloud\Tea\Model;

class tags extends Model
{
    /**
     * @var string
     */
    public $value;

    /**
     * @var float
     */
    public $confidence;
    protected $_name = [
        'value'      => 'Value',
        'confidence' => 'Confidence',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->confidence) {
            $res['Confidence'] = $this->confidence;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tags
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['Confidence'])) {
            $model->confidence = $map['Confidence'];
        }

        return $model;
    }
}
