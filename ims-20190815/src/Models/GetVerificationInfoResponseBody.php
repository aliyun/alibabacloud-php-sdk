<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetVerificationInfoResponseBody\securityEmailDevice;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetVerificationInfoResponseBody\securityPhoneDevice;

class GetVerificationInfoResponseBody extends Model
{
    /**
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
        if (null !== $this->securityEmailDevice) {
            $this->securityEmailDevice->validate();
        }
        if (null !== $this->securityPhoneDevice) {
            $this->securityPhoneDevice->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->securityEmailDevice) {
            $res['SecurityEmailDevice'] = null !== $this->securityEmailDevice ? $this->securityEmailDevice->toArray($noStream) : $this->securityEmailDevice;
        }

        if (null !== $this->securityPhoneDevice) {
            $res['SecurityPhoneDevice'] = null !== $this->securityPhoneDevice ? $this->securityPhoneDevice->toArray($noStream) : $this->securityPhoneDevice;
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
