<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribePdnsUserInfoResponseBody\userInfo;
use AlibabaCloud\Tea\Model;

class DescribePdnsUserInfoResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example FD552816-FCC8-4832-B4A2-2DA0C2BA1688
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the user.
     *
     * @var userInfo
     */
    public $userInfo;
    protected $_name = [
        'requestId' => 'RequestId',
        'userInfo' => 'UserInfo',
    ];

    public function validate() {}

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
     * @return DescribePdnsUserInfoResponseBody
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
