<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\SDK\Vs\V20181212\Models\ManageLoginResponseBody\loginInfo;
use AlibabaCloud\Tea\Model;

class ManageLoginResponseBody extends Model
{
    /**
     * @var loginInfo
     */
    public $loginInfo;

    /**
     * @example BEA5625F-8FCF-48F4-851B-CA63946DA664
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'loginInfo' => 'LoginInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->loginInfo) {
            $res['LoginInfo'] = null !== $this->loginInfo ? $this->loginInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ManageLoginResponseBody
     */
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
