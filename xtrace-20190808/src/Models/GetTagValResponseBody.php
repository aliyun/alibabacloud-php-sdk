<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtrace\V20190808\Models;

use AlibabaCloud\SDK\Xtrace\V20190808\Models\GetTagValResponseBody\tagValues;
use AlibabaCloud\Tea\Model;

class GetTagValResponseBody extends Model
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
     * @description The tag values.
     *
     * @var tagValues
     */
    public $tagValues;
    protected $_name = [
        'requestId' => 'RequestId',
        'tagValues' => 'TagValues',
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
        if (null !== $this->tagValues) {
            $res['TagValues'] = null !== $this->tagValues ? $this->tagValues->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTagValResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TagValues'])) {
            $model->tagValues = tagValues::fromMap($map['TagValues']);
        }

        return $model;
    }
}
