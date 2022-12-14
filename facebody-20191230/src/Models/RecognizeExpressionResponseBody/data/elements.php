<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizeExpressionResponseBody\data;

use AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizeExpressionResponseBody\data\elements\faceRectangle;
use AlibabaCloud\Tea\Model;

class elements extends Model
{
    /**
     * @example surprise
     *
     * @var string
     */
    public $expression;

    /**
     * @example 0.99651491641998291
     *
     * @var float
     */
    public $faceProbability;

    /**
     * @var faceRectangle
     */
    public $faceRectangle;
    protected $_name = [
        'expression'      => 'Expression',
        'faceProbability' => 'FaceProbability',
        'faceRectangle'   => 'FaceRectangle',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expression) {
            $res['Expression'] = $this->expression;
        }
        if (null !== $this->faceProbability) {
            $res['FaceProbability'] = $this->faceProbability;
        }
        if (null !== $this->faceRectangle) {
            $res['FaceRectangle'] = null !== $this->faceRectangle ? $this->faceRectangle->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return elements
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Expression'])) {
            $model->expression = $map['Expression'];
        }
        if (isset($map['FaceProbability'])) {
            $model->faceProbability = $map['FaceProbability'];
        }
        if (isset($map['FaceRectangle'])) {
            $model->faceRectangle = faceRectangle::fromMap($map['FaceRectangle']);
        }

        return $model;
    }
}
