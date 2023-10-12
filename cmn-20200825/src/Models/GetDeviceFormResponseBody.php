<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\SDK\Cmn\V20200825\Models\GetDeviceFormResponseBody\deviceForm;
use AlibabaCloud\Tea\Model;

class GetDeviceFormResponseBody extends Model
{
    /**
     * @var deviceForm
     */
    public $deviceForm;

    /**
     * @example 6d439436-ddde-4f26-aaf6-0470099b5c35
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'deviceForm' => 'DeviceForm',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceForm) {
            $res['DeviceForm'] = null !== $this->deviceForm ? $this->deviceForm->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDeviceFormResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceForm'])) {
            $model->deviceForm = deviceForm::fromMap($map['DeviceForm']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
