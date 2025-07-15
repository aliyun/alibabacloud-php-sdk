<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveLazyPullStreamConfigResponseBody\liveLazyPullConfigList;
use AlibabaCloud\Tea\Model;

class DescribeLiveLazyPullStreamConfigResponseBody extends Model
{
    /**
     * @description The configurations of triggered stream pulling.
     *
     * @var liveLazyPullConfigList
     */
    public $liveLazyPullConfigList;

    /**
     * @description The ID of the request.
     *
     * @example A3136B58-5876-4168-83CA-B562781981A0
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'liveLazyPullConfigList' => 'LiveLazyPullConfigList',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->liveLazyPullConfigList) {
            $res['LiveLazyPullConfigList'] = null !== $this->liveLazyPullConfigList ? $this->liveLazyPullConfigList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveLazyPullStreamConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LiveLazyPullConfigList'])) {
            $model->liveLazyPullConfigList = liveLazyPullConfigList::fromMap($map['LiveLazyPullConfigList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
