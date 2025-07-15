<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainOnlineUserNumResponseBody\onlineUserInfo;
use AlibabaCloud\Tea\Model;

class DescribeLiveDomainOnlineUserNumResponseBody extends Model
{
    /**
     * @description The information about the streams.
     *
     * @var onlineUserInfo
     */
    public $onlineUserInfo;

    /**
     * @description The request ID.
     *
     * @example 3A3A8C3D-F8B2-4FBF-9319-771A11B855FA
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of streams.
     *
     * @example 1
     *
     * @var int
     */
    public $streamCount;

    /**
     * @description The total number of online users at the specified point in time for all the live streams under the main streaming domain.
     *
     * @example 1
     *
     * @var int
     */
    public $userCount;
    protected $_name = [
        'onlineUserInfo' => 'OnlineUserInfo',
        'requestId' => 'RequestId',
        'streamCount' => 'StreamCount',
        'userCount' => 'UserCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->onlineUserInfo) {
            $res['OnlineUserInfo'] = null !== $this->onlineUserInfo ? $this->onlineUserInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->streamCount) {
            $res['StreamCount'] = $this->streamCount;
        }
        if (null !== $this->userCount) {
            $res['UserCount'] = $this->userCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveDomainOnlineUserNumResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OnlineUserInfo'])) {
            $model->onlineUserInfo = onlineUserInfo::fromMap($map['OnlineUserInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StreamCount'])) {
            $model->streamCount = $map['StreamCount'];
        }
        if (isset($map['UserCount'])) {
            $model->userCount = $map['UserCount'];
        }

        return $model;
    }
}
