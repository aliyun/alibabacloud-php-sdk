<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamsTotalCountResponseBody\streamCountList;

class DescribeLiveStreamsTotalCountResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var streamCountList
     */
    public $streamCountList;
    protected $_name = [
        'requestId' => 'RequestId',
        'streamCountList' => 'StreamCountList',
    ];

    public function validate()
    {
        if (null !== $this->streamCountList) {
            $this->streamCountList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->streamCountList) {
            $res['StreamCountList'] = null !== $this->streamCountList ? $this->streamCountList->toArray($noStream) : $this->streamCountList;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['StreamCountList'])) {
            $model->streamCountList = streamCountList::fromMap($map['StreamCountList']);
        }

        return $model;
    }
}
