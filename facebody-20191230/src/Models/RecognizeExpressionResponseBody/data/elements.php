<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizeExpressionResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizeExpressionResponseBody\data\elements\faceRectangle;

class elements extends Model
{
    /**
     * @var string
     */
    public $expression;

    /**
     * @var float
     */
    public $faceProbability;

    /**
     * @var faceRectangle
     */
    public $faceRectangle;
    protected $_name = [
        'expression' => 'Expression',
        'faceProbability' => 'FaceProbability',
        'faceRectangle' => 'FaceRectangle',
    ];

    public function validate()
    {
        if (null !== $this->faceRectangle) {
            $this->faceRectangle->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expression) {
            $res['Expression'] = $this->expression;
        }

        if (null !== $this->faceProbability) {
            $res['FaceProbability'] = $this->faceProbability;
        }

        if (null !== $this->faceRectangle) {
            $res['FaceRectangle'] = null !== $this->faceRectangle ? $this->faceRectangle->toArray($noStream) : $this->faceRectangle;
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
