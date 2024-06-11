<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\SDK\Ram\V20150501\Models\CreateLoginProfileResponseBody\loginProfile;
use AlibabaCloud\Tea\Model;

class CreateLoginProfileResponseBody extends Model
{
    /**
     * @description The logon configurations of the RAM user.
     *
     * @var loginProfile
     */
    public $loginProfile;

    /**
     * @description The ID of the request.
     *
     * @example 04F0F334-1335-436C-A1D7-6C044FE73368
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'loginProfile' => 'LoginProfile',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->loginProfile) {
            $res['LoginProfile'] = null !== $this->loginProfile ? $this->loginProfile->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLoginProfileResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LoginProfile'])) {
            $model->loginProfile = loginProfile::fromMap($map['LoginProfile']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
