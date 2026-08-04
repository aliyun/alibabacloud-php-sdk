<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\QueryAccountProfileInfoResponseBody\profileInfo;

class QueryAccountProfileInfoResponseBody extends Model
{
    /**
     * @var profileInfo
     */
    public $profileInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'profileInfo' => 'ProfileInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->profileInfo) {
            $this->profileInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->profileInfo) {
            $res['ProfileInfo'] = null !== $this->profileInfo ? $this->profileInfo->toArray($noStream) : $this->profileInfo;
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
        if (isset($map['ProfileInfo'])) {
            $model->profileInfo = profileInfo::fromMap($map['ProfileInfo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
