<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Dara\Model;

class DeleteMFADeviceForUserRequest extends Model
{
    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var string
     */
    public $MFADeviceId;

    /**
     * @var string
     */
    public $mfaType;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'directoryId' => 'DirectoryId',
        'MFADeviceId' => 'MFADeviceId',
        'mfaType' => 'MfaType',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }

        if (null !== $this->MFADeviceId) {
            $res['MFADeviceId'] = $this->MFADeviceId;
        }

        if (null !== $this->mfaType) {
            $res['MfaType'] = $this->mfaType;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }

        if (isset($map['MFADeviceId'])) {
            $model->MFADeviceId = $map['MFADeviceId'];
        }

        if (isset($map['MfaType'])) {
            $model->mfaType = $map['MfaType'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
