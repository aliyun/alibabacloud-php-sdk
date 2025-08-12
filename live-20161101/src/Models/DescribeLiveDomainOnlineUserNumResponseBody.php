<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainOnlineUserNumResponseBody\onlineUserInfo;

class DescribeLiveDomainOnlineUserNumResponseBody extends Model
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
        'requestId' => 'RequestId',
        'streamCount' => 'StreamCount',
        'userCount' => 'UserCount',
    ];

    public function validate()
    {
        if (null !== $this->onlineUserInfo) {
            $this->onlineUserInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->onlineUserInfo) {
            $res['OnlineUserInfo'] = null !== $this->onlineUserInfo ? $this->onlineUserInfo->toArray($noStream) : $this->onlineUserInfo;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
