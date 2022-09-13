<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models\FaceGroup;

use AlibabaCloud\Tea\Model;

class groupCoverFaceBoundary extends Model
{
    /**
     * @var int
     */
    public $height;

    /**
     * @var int
     */
    public $left;

    /**
     * @var int
     */
    public $top;

    /**
     * @var int
     */
    public $width;
    protected $_name = [
        'height' => 'height',
        'left'   => 'left',
        'top'    => 'top',
        'width'  => 'width',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->height) {
            $res['height'] = $this->height;
        }
        if (null !== $this->left) {
            $res['left'] = $this->left;
        }
        if (null !== $this->top) {
            $res['top'] = $this->top;
        }
        if (null !== $this->width) {
            $res['width'] = $this->width;
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
        if (isset($map['height'])) {
            $model->height = $map['height'];
        }
        if (isset($map['left'])) {
            $model->left = $map['left'];
        }
        if (isset($map['top'])) {
            $model->top = $map['top'];
        }
        if (isset($map['width'])) {
            $model->width = $map['width'];
        }

        return $model;
    }
}
