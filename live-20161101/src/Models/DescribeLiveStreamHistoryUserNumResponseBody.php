<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamHistoryUserNumResponseBody\liveStreamUserNumInfos;

class DescribeLiveStreamHistoryUserNumResponseBody extends Model
{
    /**
     * @var liveStreamUserNumInfos
     */
    public $liveStreamUserNumInfos;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'liveStreamUserNumInfos' => 'LiveStreamUserNumInfos',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->liveStreamUserNumInfos) {
            $this->liveStreamUserNumInfos->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->liveStreamUserNumInfos) {
            $res['LiveStreamUserNumInfos'] = null !== $this->liveStreamUserNumInfos ? $this->liveStreamUserNumInfos->toArray($noStream) : $this->liveStreamUserNumInfos;
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
        if (isset($map['LiveStreamUserNumInfos'])) {
            $model->liveStreamUserNumInfos = liveStreamUserNumInfos::fromMap($map['LiveStreamUserNumInfos']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
