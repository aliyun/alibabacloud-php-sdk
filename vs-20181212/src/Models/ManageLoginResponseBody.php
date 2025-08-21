<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vs\V20181212\Models\ManageLoginResponseBody\loginInfo;

class ManageLoginResponseBody extends Model
{
    /**
     * @var loginInfo
     */
    public $loginInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'loginInfo' => 'LoginInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->loginInfo) {
            $this->loginInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->loginInfo) {
            $res['LoginInfo'] = null !== $this->loginInfo ? $this->loginInfo->toArray($noStream) : $this->loginInfo;
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
        if (isset($map['LoginInfo'])) {
            $model->loginInfo = loginInfo::fromMap($map['LoginInfo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
