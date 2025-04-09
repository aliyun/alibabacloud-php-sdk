<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Httpdns\V20160201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Httpdns\V20160201\Models\GetAccountInfoResponseBody\accountInfo;

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
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->accountInfo) {
            $this->accountInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountInfo) {
            $res['AccountInfo'] = null !== $this->accountInfo ? $this->accountInfo->toArray($noStream) : $this->accountInfo;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AccountInfo'])) {
            $model->accountInfo = accountInfo::fromMap($map['AccountInfo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
