<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamsTotalCountResponseBody\streamCountList;
use AlibabaCloud\Tea\Model;

class DescribeLiveStreamsTotalCountResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example String	FCFFE4A4-F34F-4EEF-B401-36A01689AFBC
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The statistics about the live streams.
     *
     * @var streamCountList
     */
    public $streamCountList;
    protected $_name = [
        'requestId' => 'RequestId',
        'streamCountList' => 'StreamCountList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->streamCountList) {
            $res['StreamCountList'] = null !== $this->streamCountList ? $this->streamCountList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveStreamsTotalCountResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StreamCountList'])) {
            $model->streamCountList = streamCountList::fromMap($map['StreamCountList']);
        }

        return $model;
    }
}
