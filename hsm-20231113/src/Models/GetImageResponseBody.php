<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hsm\V20231113\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hsm\V20231113\Models\GetImageResponseBody\image;

class GetImageResponseBody extends Model
{
    /**
     * @var image
     */
    public $image;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'image' => 'Image',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->image) {
            $this->image->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->image) {
            $res['Image'] = null !== $this->image ? $this->image->toArray($noStream) : $this->image;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
