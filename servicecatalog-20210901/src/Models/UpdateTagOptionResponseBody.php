<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\UpdateTagOptionResponseBody\tagOptionDetail;
use AlibabaCloud\Tea\Model;

class UpdateTagOptionResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 0FEEF92D-4052-5202-87D0-3D8EC16F****
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
     * @return UpdateTagOptionResponseBody
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
