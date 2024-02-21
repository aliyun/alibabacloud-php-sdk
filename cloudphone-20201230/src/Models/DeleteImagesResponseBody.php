<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudphone\V20201230\Models;

use AlibabaCloud\SDK\Cloudphone\V20201230\Models\DeleteImagesResponseBody\imageResponses;
use AlibabaCloud\Tea\Model;

class DeleteImagesResponseBody extends Model
{
    /**
     * @description Details about images that are deleted.
     *
     * @var imageResponses
     */
    public $imageResponses;

    /**
     * @description The request ID.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'imageResponses' => 'ImageResponses',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageResponses) {
            $res['ImageResponses'] = null !== $this->imageResponses ? $this->imageResponses->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteImagesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageResponses'])) {
            $model->imageResponses = imageResponses::fromMap($map['ImageResponses']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
