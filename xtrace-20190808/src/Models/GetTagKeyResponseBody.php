<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtrace\V20190808\Models;

use AlibabaCloud\SDK\Xtrace\V20190808\Models\GetTagKeyResponseBody\tagKeys;
use AlibabaCloud\Tea\Model;

class GetTagKeyResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 1E2B6A4C-6B83-4062-8B6F-AEEC1F******
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The tag keys.
     *
     * @var tagKeys
     */
    public $tagKeys;
    protected $_name = [
        'requestId' => 'RequestId',
        'tagKeys'   => 'TagKeys',
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
        if (null !== $this->tagKeys) {
            $res['TagKeys'] = null !== $this->tagKeys ? $this->tagKeys->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTagKeyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TagKeys'])) {
            $model->tagKeys = tagKeys::fromMap($map['TagKeys']);
        }

        return $model;
    }
}
