<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamCountResponseBody\streamCountInfos;
use AlibabaCloud\Tea\Model;

class DescribeLiveStreamCountResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var streamCountInfos
     */
    public $streamCountInfos;
    protected $_name = [
        'requestId'        => 'RequestId',
        'streamCountInfos' => 'StreamCountInfos',
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
        if (null !== $this->streamCountInfos) {
            $res['StreamCountInfos'] = null !== $this->streamCountInfos ? $this->streamCountInfos->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveStreamCountResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StreamCountInfos'])) {
            $model->streamCountInfos = streamCountInfos::fromMap($map['StreamCountInfos']);
        }

        return $model;
    }
}
