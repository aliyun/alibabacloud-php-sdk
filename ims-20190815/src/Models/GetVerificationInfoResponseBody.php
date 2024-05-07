<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\SDK\Ims\V20190815\Models\GetVerificationInfoResponseBody\securityEmailDevice;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetVerificationInfoResponseBody\securityPhoneDevice;
use AlibabaCloud\Tea\Model;

class GetVerificationInfoResponseBody extends Model
{
    /**
     * @example B182C041-8C64-5F2F-A07B-FC67FAF89CF9
     *
     * @var string
     */
    public $requestId;

    /**
     * @var securityEmailDevice
     */
    public $securityEmailDevice;

    /**
     * @var securityPhoneDevice
     */
    public $securityPhoneDevice;
    protected $_name = [
        'requestId'           => 'RequestId',
        'securityEmailDevice' => 'SecurityEmailDevice',
        'securityPhoneDevice' => 'SecurityPhoneDevice',
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
        if (null !== $this->securityEmailDevice) {
            $res['SecurityEmailDevice'] = null !== $this->securityEmailDevice ? $this->securityEmailDevice->toMap() : null;
        }
        if (null !== $this->securityPhoneDevice) {
            $res['SecurityPhoneDevice'] = null !== $this->securityPhoneDevice ? $this->securityPhoneDevice->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetVerificationInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SecurityEmailDevice'])) {
            $model->securityEmailDevice = securityEmailDevice::fromMap($map['SecurityEmailDevice']);
        }
        if (isset($map['SecurityPhoneDevice'])) {
            $model->securityPhoneDevice = securityPhoneDevice::fromMap($map['SecurityPhoneDevice']);
        }

        return $model;
    }
}
