<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectTransparentImageResponseBody\data;

use AlibabaCloud\Tea\Model;

class elements extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $transparentImage;
    protected $_name = [
        'transparentImage' => 'TransparentImage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->transparentImage) {
            $res['TransparentImage'] = $this->transparentImage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return elements
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TransparentImage'])) {
            $model->transparentImage = $map['TransparentImage'];
        }

        return $model;
    }
}
