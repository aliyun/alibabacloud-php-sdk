<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models\FaceGroup;

use AlibabaCloud\Tea\Model;

class groupCoverFaceBoundary extends Model
{
    /**
     * @example 300
     *
     * @var int
     */
    public $height;

    /**
     * @example 10
     *
     * @var int
     */
    public $left;

    /**
     * @example 30
     *
     * @var int
     */
    public $top;

    /**
     * @example 200
     *
     * @var int
     */
    public $width;
    protected $_name = [
        'height' => 'Height',
        'left'   => 'Left',
        'top'    => 'Top',
        'width'  => 'Width',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->left) {
            $res['Left'] = $this->left;
        }
        if (null !== $this->top) {
            $res['Top'] = $this->top;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return groupCoverFaceBoundary
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Left'])) {
            $model->left = $map['Left'];
        }
        if (isset($map['Top'])) {
            $model->top = $map['Top'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
