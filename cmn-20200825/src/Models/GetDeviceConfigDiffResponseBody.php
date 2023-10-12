<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\SDK\Cmn\V20200825\Models\GetDeviceConfigDiffResponseBody\deviceConfigDiff;
use AlibabaCloud\Tea\Model;

class GetDeviceConfigDiffResponseBody extends Model
{
    /**
     * @var deviceConfigDiff
     */
    public $deviceConfigDiff;

    /**
     * @example fdb2af01-bd56-4034-812b-f257f73b4690
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'deviceConfigDiff' => 'DeviceConfigDiff',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceConfigDiff) {
            $res['DeviceConfigDiff'] = null !== $this->deviceConfigDiff ? $this->deviceConfigDiff->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDeviceConfigDiffResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceConfigDiff'])) {
            $model->deviceConfigDiff = deviceConfigDiff::fromMap($map['DeviceConfigDiff']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
