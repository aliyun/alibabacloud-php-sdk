<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageBaselineDetailResponseBody\baselineDetail;
use AlibabaCloud\Tea\Model;

class DescribeImageBaselineDetailResponseBody extends Model
{
    /**
     * @description The details about the image baseline.
     *
     * @var baselineDetail
     */
    public $baselineDetail;

    /**
     * @description The ID of the request.
     *
     * @example 0B48AB3C-84FC-424D-A01D-B9270EF4****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'baselineDetail' => 'BaselineDetail',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baselineDetail) {
            $res['BaselineDetail'] = null !== $this->baselineDetail ? $this->baselineDetail->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeImageBaselineDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaselineDetail'])) {
            $model->baselineDetail = baselineDetail::fromMap($map['BaselineDetail']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
