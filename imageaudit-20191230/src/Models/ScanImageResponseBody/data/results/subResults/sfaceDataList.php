<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageaudit\V20191230\Models\ScanImageResponseBody\data\results\subResults;

use AlibabaCloud\SDK\Imageaudit\V20191230\Models\ScanImageResponseBody\data\results\subResults\sfaceDataList\faces;
use AlibabaCloud\Tea\Model;

class sfaceDataList extends Model
{
    /**
     * @var faces[]
     */
    public $faces;

    /**
     * @var float
     */
    public $height;

    /**
     * @var float
     */
    public $width;

    /**
     * @var float
     */
    public $x;

    /**
     * @var float
     */
    public $y;
    protected $_name = [
        'faces'  => 'Faces',
        'height' => 'Height',
        'width'  => 'Width',
        'x'      => 'X',
        'y'      => 'Y',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->faces) {
            $res['Faces'] = [];
            if (null !== $this->faces && \is_array($this->faces)) {
                $n = 0;
                foreach ($this->faces as $item) {
                    $res['Faces'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }
        if (null !== $this->x) {
            $res['X'] = $this->x;
        }
        if (null !== $this->y) {
            $res['Y'] = $this->y;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sfaceDataList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Faces'])) {
            if (!empty($map['Faces'])) {
                $model->faces = [];
                $n            = 0;
                foreach ($map['Faces'] as $item) {
                    $model->faces[$n++] = null !== $item ? faces::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
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
