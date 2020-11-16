<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamHistoryUserNumResponse\liveStreamUserNumInfos;
use AlibabaCloud\Tea\Model;

class DescribeLiveStreamHistoryUserNumResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var liveStreamUserNumInfos
     */
    public $liveStreamUserNumInfos;
    protected $_name = [
        'requestId'              => 'RequestId',
        'liveStreamUserNumInfos' => 'LiveStreamUserNumInfos',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('liveStreamUserNumInfos', $this->liveStreamUserNumInfos, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->liveStreamUserNumInfos) {
            $res['LiveStreamUserNumInfos'] = null !== $this->liveStreamUserNumInfos ? $this->liveStreamUserNumInfos->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveStreamHistoryUserNumResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['LiveStreamUserNumInfos'])) {
            $model->liveStreamUserNumInfos = liveStreamUserNumInfos::fromMap($map['LiveStreamUserNumInfos']);
        }

        return $model;
    }
}
