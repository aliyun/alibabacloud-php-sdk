<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizePublicFaceResponseBody\data\elements\results;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizePublicFaceResponseBody\data\elements\results\subResults\faces;

class subResults extends Model
{
    /**
     * @var faces[]
     */
    public $faces;

    /**
     * @var float
     */
    public $h;

    /**
     * @var float
     */
    public $w;

    /**
     * @var float
     */
    public $x;

    /**
     * @var float
     */
    public $y;
    protected $_name = [
        'faces' => 'Faces',
        'h' => 'H',
        'w' => 'W',
        'x' => 'X',
        'y' => 'Y',
    ];

    public function validate()
    {
        if (\is_array($this->faces)) {
            Model::validateArray($this->faces);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->faces) {
            if (\is_array($this->faces)) {
                $res['Faces'] = [];
                $n1 = 0;
                foreach ($this->faces as $item1) {
                    $res['Faces'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->h) {
            $res['H'] = $this->h;
        }

        if (null !== $this->w) {
            $res['W'] = $this->w;
        }

        if (null !== $this->x) {
            $res['X'] = $this->x;
        }

        if (null !== $this->y) {
            $res['Y'] = $this->y;
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
        if (isset($map['Faces'])) {
            if (!empty($map['Faces'])) {
                $model->faces = [];
                $n1 = 0;
                foreach ($map['Faces'] as $item1) {
                    $model->faces[$n1] = faces::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['H'])) {
            $model->h = $map['H'];
        }

        if (isset($map['W'])) {
            $model->w = $map['W'];
        }

        if (isset($map['X'])) {
            $model->x = $map['X'];
        }

        if (isset($map['Y'])) {
            $model->y = $map['Y'];
        }

        return $model;
    }
}
