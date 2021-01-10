<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveLazyPullStreamConfigResponseBody\liveLazyPullConfigList;
use AlibabaCloud\Tea\Model;

class DescribeLiveLazyPullStreamConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var liveLazyPullConfigList
     */
    public $liveLazyPullConfigList;
    protected $_name = [
        'requestId'              => 'RequestId',
        'liveLazyPullConfigList' => 'LiveLazyPullConfigList',
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
        if (null !== $this->liveLazyPullConfigList) {
            $res['LiveLazyPullConfigList'] = null !== $this->liveLazyPullConfigList ? $this->liveLazyPullConfigList->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['LiveLazyPullConfigList'])) {
            $model->liveLazyPullConfigList = liveLazyPullConfigList::fromMap($map['LiveLazyPullConfigList']);
        }

        return $model;
    }
}
