<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudUserResponseBody\userInfo;
use AlibabaCloud\Tea\Model;

class DescribeHybridCloudUserResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 9178CB86-285F-5679-A30A-3B3F007E4206
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the ports that can be used by a hybrid cloud cluster.
     *
     * @var userInfo
     */
    public $userInfo;
    protected $_name = [
        'requestId' => 'RequestId',
        'userInfo'  => 'UserInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->userInfo) {
            $res['UserInfo'] = null !== $this->userInfo ? $this->userInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHybridCloudUserResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UserInfo'])) {
            $model->userInfo = userInfo::fromMap($map['UserInfo']);
        }

        return $model;
    }
}
