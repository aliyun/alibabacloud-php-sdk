<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamMergeResponseBody\liveStreamMergeList;
use AlibabaCloud\Tea\Model;

class DescribeLiveStreamMergeResponseBody extends Model
{
    /**
     * @description Live stream information list.
     *
     * @var liveStreamMergeList
     */
    public $liveStreamMergeList;

    /**
     * @description The ID of the request.
     *
     * @example 16A96B9A-F203-4EC5-8E43-CB92E68F4CD8
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'liveStreamMergeList' => 'LiveStreamMergeList',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->liveStreamMergeList) {
            $res['LiveStreamMergeList'] = null !== $this->liveStreamMergeList ? $this->liveStreamMergeList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveStreamMergeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LiveStreamMergeList'])) {
            $model->liveStreamMergeList = liveStreamMergeList::fromMap($map['LiveStreamMergeList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
