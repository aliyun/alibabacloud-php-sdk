<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveGrtnDurationResponseBody\streamDetailData;
use AlibabaCloud\Tea\Model;

class DescribeLiveGrtnDurationResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 4B460F8B-993C-4F48-B98A-910811DEBFEB
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The details of the co-streaming usage data.
     *
     * @var streamDetailData
     */
    public $streamDetailData;
    protected $_name = [
        'requestId' => 'RequestId',
        'streamDetailData' => 'StreamDetailData',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->streamDetailData) {
            $res['StreamDetailData'] = null !== $this->streamDetailData ? $this->streamDetailData->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveGrtnDurationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StreamDetailData'])) {
            $model->streamDetailData = streamDetailData::fromMap($map['StreamDetailData']);
        }

        return $model;
    }
}
