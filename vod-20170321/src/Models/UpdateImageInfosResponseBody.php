<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateImageInfosResponseBody\nonExistImageIds;
use AlibabaCloud\Tea\Model;

class UpdateImageInfosResponseBody extends Model
{
    /**
     * @description The IDs of the images that do not exist.
     *
     * @var nonExistImageIds
     */
    public $nonExistImageIds;

    /**
     * @description The ID of the request.
     *
     * @example 25818875-5F78-4AF6-D7393642CA58****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nonExistImageIds' => 'NonExistImageIds',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nonExistImageIds) {
            $res['NonExistImageIds'] = null !== $this->nonExistImageIds ? $this->nonExistImageIds->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateImageInfosResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NonExistImageIds'])) {
            $model->nonExistImageIds = nonExistImageIds::fromMap($map['NonExistImageIds']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
