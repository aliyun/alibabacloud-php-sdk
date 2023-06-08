<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avatar\V20220130\Models\QueryAvatarResponseBody\data\supportedResolutions;

use AlibabaCloud\Tea\Model;

class offline extends Model
{
    /**
     * @var string
     */
    public $desc;

    /**
     * @example 1920
     *
     * @var int
     */
    public $height;

    /**
     * @example 1080
     *
     * @var int
     */
    public $width;
    protected $_name = [
        'desc'   => 'Desc',
        'height' => 'Height',
        'width'  => 'Width',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return offline
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
