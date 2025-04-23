<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListCommunityImagesResponseBody\images;

class ListCommunityImagesResponseBody extends Model
{
    /**
     * @var images
     */
    public $images;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'images' => 'Images',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->images) {
            $this->images->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->images) {
            $res['Images'] = null !== $this->images ? $this->images->toArray($noStream) : $this->images;
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
        if (isset($map['Images'])) {
            $model->images = images::fromMap($map['Images']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
