<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class CreateCustomImageResponseBody extends Model
{
    /**
     * @description The ID of the custom image.
     *
     * @example imgc-075cllfeuazh0****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The ID of the request.
     *
     * @example 20393E53-8FF1-524C-B494-B478A5369733
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'imageId' => 'ImageId',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCustomImageResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
