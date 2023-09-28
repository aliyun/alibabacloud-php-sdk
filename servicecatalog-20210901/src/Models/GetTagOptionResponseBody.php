<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetTagOptionResponseBody\tagOptionDetail;
use AlibabaCloud\Tea\Model;

class GetTagOptionResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example C1509725-055D-5C7B-9420-8B737DBD****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The details of the tag option.
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
     * @return GetTagOptionResponseBody
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
