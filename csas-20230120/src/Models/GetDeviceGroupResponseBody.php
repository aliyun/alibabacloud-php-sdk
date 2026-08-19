<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetDeviceGroupResponseBody\deviceGroup;

class GetDeviceGroupResponseBody extends Model
{
    /**
     * @var deviceGroup
     */
    public $deviceGroup;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'deviceGroup' => 'DeviceGroup',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->deviceGroup) {
            $this->deviceGroup->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceGroup) {
            $res['DeviceGroup'] = null !== $this->deviceGroup ? $this->deviceGroup->toArray($noStream) : $this->deviceGroup;
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
        if (isset($map['DeviceGroup'])) {
            $model->deviceGroup = deviceGroup::fromMap($map['DeviceGroup']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
