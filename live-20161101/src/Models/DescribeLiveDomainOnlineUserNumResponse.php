<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainOnlineUserNumResponse\onlineUserInfo;
use AlibabaCloud\Tea\Model;

class DescribeLiveDomainOnlineUserNumResponse extends Model
{
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

    /**
     * @var onlineUserInfo
     */
    public $onlineUserInfo;
    protected $_name = [
        'requestId'      => 'RequestId',
        'streamCount'    => 'StreamCount',
        'userCount'      => 'UserCount',
        'onlineUserInfo' => 'OnlineUserInfo',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('streamCount', $this->streamCount, true);
        Model::validateRequired('userCount', $this->userCount, true);
        Model::validateRequired('onlineUserInfo', $this->onlineUserInfo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->streamCount) {
            $res['StreamCount'] = $this->streamCount;
        }
        if (null !== $this->userCount) {
            $res['UserCount'] = $this->userCount;
        }
        if (null !== $this->onlineUserInfo) {
            $res['OnlineUserInfo'] = null !== $this->onlineUserInfo ? $this->onlineUserInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveDomainOnlineUserNumResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StreamCount'])) {
            $model->streamCount = $map['StreamCount'];
        }
        if (isset($map['UserCount'])) {
            $model->userCount = $map['UserCount'];
        }
        if (isset($map['OnlineUserInfo'])) {
            $model->onlineUserInfo = onlineUserInfo::fromMap($map['OnlineUserInfo']);
        }

        return $model;
    }
}
