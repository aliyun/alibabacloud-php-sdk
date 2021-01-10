<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainOnlineUserNumResponseBody\onlineUserInfo;
use AlibabaCloud\Tea\Model;

class DescribeLiveDomainOnlineUserNumResponseBody extends Model
{
    /**
     * @var int
     */
    public $streamCount;

    /**
     * @var onlineUserInfo
     */
    public $onlineUserInfo;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $userCount;
    protected $_name = [
        'streamCount'    => 'StreamCount',
        'onlineUserInfo' => 'OnlineUserInfo',
        'requestId'      => 'RequestId',
        'userCount'      => 'UserCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->streamCount) {
            $res['StreamCount'] = $this->streamCount;
        }
        if (null !== $this->onlineUserInfo) {
            $res['OnlineUserInfo'] = null !== $this->onlineUserInfo ? $this->onlineUserInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['StreamCount'])) {
            $model->streamCount = $map['StreamCount'];
        }
        if (isset($map['OnlineUserInfo'])) {
            $model->onlineUserInfo = onlineUserInfo::fromMap($map['OnlineUserInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UserCount'])) {
            $model->userCount = $map['UserCount'];
        }

        return $model;
    }
}
