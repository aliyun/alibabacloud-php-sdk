<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveLazyPullStreamConfigResponseBody\liveLazyPullConfigList;

class DescribeLiveLazyPullStreamConfigResponseBody extends Model
{
    /**
     * @var liveLazyPullConfigList
     */
    public $liveLazyPullConfigList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'liveLazyPullConfigList' => 'LiveLazyPullConfigList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->liveLazyPullConfigList) {
            $this->liveLazyPullConfigList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->liveLazyPullConfigList) {
            $res['LiveLazyPullConfigList'] = null !== $this->liveLazyPullConfigList ? $this->liveLazyPullConfigList->toArray($noStream) : $this->liveLazyPullConfigList;
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
        if (isset($map['LiveLazyPullConfigList'])) {
            $model->liveLazyPullConfigList = liveLazyPullConfigList::fromMap($map['LiveLazyPullConfigList']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
