<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamOnlineUserNumResponseBody\onlineUserInfo;
use AlibabaCloud\Tea\Model;

class DescribeLiveStreamOnlineUserNumResponseBody extends Model
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
    public $totalUserNumber;
    protected $_name = [
        'onlineUserInfo'  => 'OnlineUserInfo',
        'requestId'       => 'RequestId',
        'totalUserNumber' => 'TotalUserNumber',
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
        if (null !== $this->totalUserNumber) {
            $res['TotalUserNumber'] = $this->totalUserNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveStreamOnlineUserNumResponseBody
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
        if (isset($map['TotalUserNumber'])) {
            $model->totalUserNumber = $map['TotalUserNumber'];
        }

        return $model;
    }
}
