<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ListCustomImagesResponseBody\images;
use AlibabaCloud\Tea\Model;

class ListCustomImagesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var images
     */
    public $images;
    protected $_name = [
        'requestId' => 'RequestId',
        'images'    => 'Images',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->images) {
            $res['Images'] = null !== $this->images ? $this->images->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCustomImagesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Images'])) {
            $model->images = images::fromMap($map['Images']);
        }

        return $model;
    }
}
