<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CroppingSuggestion extends Model
{
    /**
     * @var string
     */
    public $aspectRatio;

    /**
     * @var Boundary
     */
    public $boundary;

    /**
     * @var float
     */
    public $confidence;
    protected $_name = [
        'aspectRatio' => 'AspectRatio',
        'boundary'    => 'Boundary',
        'confidence'  => 'Confidence',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aspectRatio) {
            $res['AspectRatio'] = $this->aspectRatio;
        }
        if (null !== $this->boundary) {
            $res['Boundary'] = null !== $this->boundary ? $this->boundary->toMap() : null;
        }
        if (null !== $this->confidence) {
            $res['Confidence'] = $this->confidence;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CroppingSuggestion
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AspectRatio'])) {
            $model->aspectRatio = $map['AspectRatio'];
        }
        if (isset($map['Boundary'])) {
            $model->boundary = Boundary::fromMap($map['Boundary']);
        }
        if (isset($map['Confidence'])) {
            $model->confidence = $map['Confidence'];
        }

        return $model;
    }
}
