<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeAccountPageResponseBody\data;

use AlibabaCloud\Tea\Model;

class undertakeStampAreas extends Model
{
    /**
     * @var int
     */
    public $top;

    /**
     * @var int
     */
    public $width;

    /**
     * @var int
     */
    public $height;

    /**
     * @var int
     */
    public $left;
    protected $_name = [
        'top'    => 'Top',
        'width'  => 'Width',
        'height' => 'Height',
        'left'   => 'Left',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->top) {
            $res['Top'] = $this->top;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->left) {
            $res['Left'] = $this->left;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return undertakeStampAreas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Top'])) {
            $model->top = $map['Top'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Left'])) {
            $model->left = $map['Left'];
        }

        return $model;
    }
}
