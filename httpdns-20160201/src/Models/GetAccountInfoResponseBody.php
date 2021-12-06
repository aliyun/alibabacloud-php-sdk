<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Httpdns\V20160201\Models;

use AlibabaCloud\SDK\Httpdns\V20160201\Models\GetAccountInfoResponseBody\accountInfo;
use AlibabaCloud\Tea\Model;

class GetAccountInfoResponseBody extends Model
{
    /**
     * @var accountInfo
     */
    public $accountInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accountInfo' => 'AccountInfo',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountInfo) {
            $res['AccountInfo'] = null !== $this->accountInfo ? $this->accountInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAccountInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountInfo'])) {
            $model->accountInfo = accountInfo::fromMap($map['AccountInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
