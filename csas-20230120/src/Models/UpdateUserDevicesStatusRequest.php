<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class UpdateUserDevicesStatusRequest extends Model
{
    /**
     * @example Unbound
     *
     * @var string
     */
    public $deviceAction;

    /**
     * @var string[]
     */
    public $deviceTags;
    protected $_name = [
        'deviceAction' => 'DeviceAction',
        'deviceTags'   => 'DeviceTags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceAction) {
            $res['DeviceAction'] = $this->deviceAction;
        }
        if (null !== $this->deviceTags) {
            $res['DeviceTags'] = $this->deviceTags;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateUserDevicesStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceAction'])) {
            $model->deviceAction = $map['DeviceAction'];
        }
        if (isset($map['DeviceTags'])) {
            if (!empty($map['DeviceTags'])) {
                $model->deviceTags = $map['DeviceTags'];
            }
        }

        return $model;
    }
}
