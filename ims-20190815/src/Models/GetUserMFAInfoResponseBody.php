<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\SDK\Ims\V20190815\Models\GetUserMFAInfoResponseBody\MFADevice;
use AlibabaCloud\Tea\Model;

class GetUserMFAInfoResponseBody extends Model
{
    /**
     * @var bool
     */
    public $isMFAEnable;

    /**
     * @var MFADevice
     */
    public $MFADevice;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'isMFAEnable' => 'IsMFAEnable',
        'MFADevice'   => 'MFADevice',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isMFAEnable) {
            $res['IsMFAEnable'] = $this->isMFAEnable;
        }
        if (null !== $this->MFADevice) {
            $res['MFADevice'] = null !== $this->MFADevice ? $this->MFADevice->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserMFAInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsMFAEnable'])) {
            $model->isMFAEnable = $map['IsMFAEnable'];
        }
        if (isset($map['MFADevice'])) {
            $model->MFADevice = MFADevice::fromMap($map['MFADevice']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
