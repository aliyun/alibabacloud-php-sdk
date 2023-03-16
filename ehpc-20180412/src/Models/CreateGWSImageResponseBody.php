<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class CreateGWSImageResponseBody extends Model
{
    /**
     * @description The image ID of the visualization instance.
     *
     * @example ehs-fakeid-****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The ID of the request.
     *
     * @example 5198C3E8-85F5-4280-8547-687C1710FE08
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'imageId'   => 'ImageId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

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
     * @return CreateGWSImageResponseBody
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
