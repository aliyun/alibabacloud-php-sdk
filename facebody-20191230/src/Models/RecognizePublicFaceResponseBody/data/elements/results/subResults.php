<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizePublicFaceResponseBody\data\elements\results;

use AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizePublicFaceResponseBody\data\elements\results\subResults\faces;
use AlibabaCloud\Tea\Model;

class subResults extends Model
{
    /**
     * @var float
     */
    public $w;

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
    public $y;

    /**
     * @var float
     */
    public $x;
    protected $_name = [
        'w'     => 'W',
        'faces' => 'Faces',
        'h'     => 'H',
        'y'     => 'Y',
        'x'     => 'X',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->w) {
            $res['W'] = $this->w;
        }
        if (null !== $this->faces) {
            $res['Faces'] = [];
            if (null !== $this->faces && \is_array($this->faces)) {
                $n = 0;
                foreach ($this->faces as $item) {
                    $res['Faces'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->h) {
            $res['H'] = $this->h;
        }
        if (null !== $this->y) {
            $res['Y'] = $this->y;
        }
        if (null !== $this->x) {
            $res['X'] = $this->x;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['W'])) {
            $model->w = $map['W'];
        }
        if (isset($map['Faces'])) {
            if (!empty($map['Faces'])) {
                $model->faces = [];
                $n            = 0;
                foreach ($map['Faces'] as $item) {
                    $model->faces[$n++] = null !== $item ? faces::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['H'])) {
            $model->h = $map['H'];
        }
        if (isset($map['Y'])) {
            $model->y = $map['Y'];
        }
        if (isset($map['X'])) {
            $model->x = $map['X'];
        }

        return $model;
    }
}
