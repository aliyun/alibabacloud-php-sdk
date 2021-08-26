<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CroppingSuggestion extends Model
{
    /**
     * @description AspectRatio
     *
     * @var string
     */
    public $aspectRatio;

    /**
     * @description Confidence
     *
     * @var float
     */
    public $confidence;

    /**
     * @description Boundary
     *
     * @var Boundary
     */
    public $boundary;
    protected $_name = [
        'aspectRatio' => 'AspectRatio',
        'confidence'  => 'Confidence',
        'boundary'    => 'Boundary',
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
        if (null !== $this->confidence) {
            $res['Confidence'] = $this->confidence;
        }
        if (null !== $this->boundary) {
            $res['Boundary'] = null !== $this->boundary ? $this->boundary->toMap() : null;
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
        if (isset($map['Confidence'])) {
            $model->confidence = $map['Confidence'];
        }
        if (isset($map['Boundary'])) {
            $model->boundary = Boundary::fromMap($map['Boundary']);
        }

        return $model;
    }
}
