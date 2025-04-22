<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models\FaceGroup;

use AlibabaCloud\Dara\Model;

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
        'height' => 'Height',
        'left' => 'Left',
        'top' => 'Top',
        'width' => 'Width',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
