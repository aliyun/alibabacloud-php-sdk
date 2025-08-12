<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamMergeResponseBody\liveStreamMergeList;

class DescribeLiveStreamMergeResponseBody extends Model
{
    /**
     * @var liveStreamMergeList
     */
    public $liveStreamMergeList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'liveStreamMergeList' => 'LiveStreamMergeList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->liveStreamMergeList) {
            $this->liveStreamMergeList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->liveStreamMergeList) {
            $res['LiveStreamMergeList'] = null !== $this->liveStreamMergeList ? $this->liveStreamMergeList->toArray($noStream) : $this->liveStreamMergeList;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
