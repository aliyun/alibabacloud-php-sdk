<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamHistoryUserNumResponseBody\liveStreamUserNumInfos;
use AlibabaCloud\Tea\Model;

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
        'requestId'              => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->liveStreamUserNumInfos) {
            $res['LiveStreamUserNumInfos'] = null !== $this->liveStreamUserNumInfos ? $this->liveStreamUserNumInfos->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveStreamHistoryUserNumResponseBody
     */
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
