<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\SDK\Ram\V20150501\Models\GetLoginProfileResponseBody\loginProfile;
use AlibabaCloud\Tea\Model;

class GetLoginProfileResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var loginProfile
     */
    public $loginProfile;
    protected $_name = [
        'requestId'    => 'RequestId',
        'loginProfile' => 'LoginProfile',
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
        if (null !== $this->loginProfile) {
            $res['LoginProfile'] = null !== $this->loginProfile ? $this->loginProfile->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetLoginProfileResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['LoginProfile'])) {
            $model->loginProfile = loginProfile::fromMap($map['LoginProfile']);
        }

        return $model;
    }
}
