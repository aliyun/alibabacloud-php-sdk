<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hsm\V20231113\Models;

use AlibabaCloud\SDK\Hsm\V20231113\Models\GetImageResponseBody\image;
use AlibabaCloud\Tea\Model;

class GetImageResponseBody extends Model
{
    /**
     * @description The image information.
     *
     * @var image
     */
    public $image;

    /**
     * @description The request ID.
     *
     * @example 4C467B38-3910-447D-87BC-AC049166F216
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'image' => 'Image',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->image) {
            $res['Image'] = null !== $this->image ? $this->image->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetImageResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Image'])) {
            $model->image = image::fromMap($map['Image']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
