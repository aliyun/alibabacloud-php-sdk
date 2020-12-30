<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateImageInfosResponseBody\nonExistImageIds;
use AlibabaCloud\Tea\Model;

class UpdateImageInfosResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var nonExistImageIds
     */
    public $nonExistImageIds;
    protected $_name = [
        'requestId'        => 'RequestId',
        'nonExistImageIds' => 'NonExistImageIds',
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
        if (null !== $this->nonExistImageIds) {
            $res['NonExistImageIds'] = null !== $this->nonExistImageIds ? $this->nonExistImageIds->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['NonExistImageIds'])) {
            $model->nonExistImageIds = nonExistImageIds::fromMap($map['NonExistImageIds']);
        }

        return $model;
    }
}
