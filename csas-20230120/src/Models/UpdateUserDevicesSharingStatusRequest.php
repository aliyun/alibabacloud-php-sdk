<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class UpdateUserDevicesSharingStatusRequest extends Model
{
    /**
     * @var string[]
     */
    public $deviceTags;

    /**
     * @example true
     *
     * @var bool
     */
    public $sharingStatus;
    protected $_name = [
        'deviceTags'    => 'DeviceTags',
        'sharingStatus' => 'SharingStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceTags) {
            $res['DeviceTags'] = $this->deviceTags;
        }
        if (null !== $this->sharingStatus) {
            $res['SharingStatus'] = $this->sharingStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateUserDevicesSharingStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceTags'])) {
            if (!empty($map['DeviceTags'])) {
                $model->deviceTags = $map['DeviceTags'];
            }
        }
        if (isset($map['SharingStatus'])) {
            $model->sharingStatus = $map['SharingStatus'];
        }

        return $model;
    }
}
