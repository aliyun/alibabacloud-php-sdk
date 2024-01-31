<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetCheckRunResponseBody\result\output;

use AlibabaCloud\Tea\Model;

class images extends Model
{
    /**
     * @example test-image-alt
     *
     * @var string
     */
    public $alt;

    /**
     * @example test
     *
     * @var string
     */
    public $caption;

    /**
     * @example xxx
     *
     * @var string
     */
    public $imageUrl;
    protected $_name = [
        'alt'      => 'alt',
        'caption'  => 'caption',
        'imageUrl' => 'imageUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alt) {
            $res['alt'] = $this->alt;
        }
        if (null !== $this->caption) {
            $res['caption'] = $this->caption;
        }
        if (null !== $this->imageUrl) {
            $res['imageUrl'] = $this->imageUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return images
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['alt'])) {
            $model->alt = $map['alt'];
        }
        if (isset($map['caption'])) {
            $model->caption = $map['caption'];
        }
        if (isset($map['imageUrl'])) {
            $model->imageUrl = $map['imageUrl'];
        }

        return $model;
    }
}
