<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainOnlineUserNumResponseBody\onlineUserInfo;
use AlibabaCloud\Tea\Model;

class DescribeVsDomainOnlineUserNumResponseBody extends Model
{
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
    public $streamCount;

    /**
     * @var int
     */
    public $userCount;
    protected $_name = [
        'onlineUserInfo' => 'OnlineUserInfo',
        'requestId'      => 'RequestId',
        'streamCount'    => 'StreamCount',
        'userCount'      => 'UserCount',
    ];

    public function validate()
    {
    }

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
     * @return DescribeVsDomainOnlineUserNumResponseBody
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
