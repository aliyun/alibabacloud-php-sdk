<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamOnlineUserNumResponse\onlineUserInfo;
use AlibabaCloud\Tea\Model;

class DescribeLiveStreamOnlineUserNumResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalUserNumber;

    /**
     * @var onlineUserInfo
     */
    public $onlineUserInfo;
    protected $_name = [
        'requestId'       => 'RequestId',
        'totalUserNumber' => 'TotalUserNumber',
        'onlineUserInfo'  => 'OnlineUserInfo',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('totalUserNumber', $this->totalUserNumber, true);
        Model::validateRequired('onlineUserInfo', $this->onlineUserInfo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalUserNumber) {
            $res['TotalUserNumber'] = $this->totalUserNumber;
        }
        if (null !== $this->onlineUserInfo) {
            $res['OnlineUserInfo'] = null !== $this->onlineUserInfo ? $this->onlineUserInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveStreamOnlineUserNumResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalUserNumber'])) {
            $model->totalUserNumber = $map['TotalUserNumber'];
        }
        if (isset($map['OnlineUserInfo'])) {
            $model->onlineUserInfo = onlineUserInfo::fromMap($map['OnlineUserInfo']);
        }

        return $model;
    }
}
