<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\CreateTagOptionResponseBody\tagOptionDetail;
use AlibabaCloud\Tea\Model;

class CreateTagOptionResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example A48A5F12-6098-54A1-A389-6834AF27****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description An array that consists of the details of the tag option.
     *
     * @var tagOptionDetail
     */
    public $tagOptionDetail;
    protected $_name = [
        'requestId'       => 'RequestId',
        'tagOptionDetail' => 'TagOptionDetail',
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
        if (null !== $this->tagOptionDetail) {
            $res['TagOptionDetail'] = null !== $this->tagOptionDetail ? $this->tagOptionDetail->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTagOptionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TagOptionDetail'])) {
            $model->tagOptionDetail = tagOptionDetail::fromMap($map['TagOptionDetail']);
        }

        return $model;
    }
}
