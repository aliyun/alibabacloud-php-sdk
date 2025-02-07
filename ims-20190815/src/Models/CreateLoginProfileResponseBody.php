<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ims\V20190815\Models\CreateLoginProfileResponseBody\loginProfile;

class CreateLoginProfileResponseBody extends Model
{
    /**
     * @var loginProfile
     */
    public $loginProfile;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'loginProfile' => 'LoginProfile',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->loginProfile) {
            $this->loginProfile->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->loginProfile) {
            $res['LoginProfile'] = null !== $this->loginProfile ? $this->loginProfile->toArray($noStream) : $this->loginProfile;
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
        if (isset($map['LoginProfile'])) {
            $model->loginProfile = loginProfile::fromMap($map['LoginProfile']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
