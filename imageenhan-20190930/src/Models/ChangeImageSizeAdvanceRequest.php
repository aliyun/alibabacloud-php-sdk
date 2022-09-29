<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class ChangeImageSizeAdvanceRequest extends Model
{
    /**
     * @var int
     */
    public $height;

    /**
     * @var Stream
     */
    public $urlObject;

    /**
     * @var int
     */
    public $width;
    protected $_name = [
        'height'    => 'Height',
        'urlObject' => 'Url',
        'width'     => 'Width',
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
        if (null !== $this->urlObject) {
            $res['Url'] = $this->urlObject;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ChangeImageSizeAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Url'])) {
            $model->urlObject = $map['Url'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
