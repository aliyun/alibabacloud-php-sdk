<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ims\V20190815\Models\UnbindMFADeviceResponseBody\MFADevice;

class UnbindMFADeviceResponseBody extends Model
{
    /**
     * @var MFADevice
     */
    public $MFADevice;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'MFADevice' => 'MFADevice',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->MFADevice) {
            $this->MFADevice->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->MFADevice) {
            $res['MFADevice'] = null !== $this->MFADevice ? $this->MFADevice->toArray($noStream) : $this->MFADevice;
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
        if (isset($map['MFADevice'])) {
            $model->MFADevice = MFADevice::fromMap($map['MFADevice']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
