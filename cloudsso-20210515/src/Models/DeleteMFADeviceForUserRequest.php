<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Tea\Model;

class DeleteMFADeviceForUserRequest extends Model
{
    /**
     * @description The ID of the directory.
     *
     * @example d-00fc2p61****
     *
     * @var string
     */
    public $directoryId;

    /**
     * @description The ID of the MFA device.
     *
     * You can call the [ListMFADevicesForUser](~~333531~~) operation to query the IDs of MFA devices.
     * @example mfa-00ujhet8pycljj7j****
     *
     * @var string
     */
    public $MFADeviceId;

    /**
     * @description The ID of the user.
     *
     * @example u-00q8wbq42wiltcrk****
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'directoryId' => 'DirectoryId',
        'MFADeviceId' => 'MFADeviceId',
        'userId'      => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->MFADeviceId) {
            $res['MFADeviceId'] = $this->MFADeviceId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteMFADeviceForUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['MFADeviceId'])) {
            $model->MFADeviceId = $map['MFADeviceId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
