<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\ListDentriesResponseBody\dentries;

use AlibabaCloud\Tea\Model;

class thumbnail extends Model
{
    /**
     * @example 64
     *
     * @var int
     */
    public $height;

    /**
     * @example url
     *
     * @var string
     */
    public $url;

    /**
     * @example 64
     *
     * @var int
     */
    public $width;
    protected $_name = [
        'height' => 'Height',
        'url'    => 'Url',
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
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return thumbnail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
