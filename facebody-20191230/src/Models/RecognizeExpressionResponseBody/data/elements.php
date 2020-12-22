<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizeExpressionResponseBody\data;

use AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizeExpressionResponseBody\data\elements\faceRectangle;
use AlibabaCloud\Tea\Model;

class elements extends Model
{
    /**
     * @var faceRectangle
     */
    public $faceRectangle;

    /**
     * @var string
     */
    public $expression;

    /**
     * @var float
     */
    public $faceProbability;
    protected $_name = [
        'faceRectangle'   => 'FaceRectangle',
        'expression'      => 'Expression',
        'faceProbability' => 'FaceProbability',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->faceRectangle) {
            $res['FaceRectangle'] = null !== $this->faceRectangle ? $this->faceRectangle->toMap() : null;
        }
        if (null !== $this->expression) {
            $res['Expression'] = $this->expression;
        }
        if (null !== $this->faceProbability) {
            $res['FaceProbability'] = $this->faceProbability;
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
        if (isset($map['FaceRectangle'])) {
            $model->faceRectangle = faceRectangle::fromMap($map['FaceRectangle']);
        }
        if (isset($map['Expression'])) {
            $model->expression = $map['Expression'];
        }
        if (isset($map['FaceProbability'])) {
            $model->faceProbability = $map['FaceProbability'];
        }

        return $model;
    }
}
