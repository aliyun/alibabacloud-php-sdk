<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Tea\Model;

class UpdateUserStatusRequest extends Model
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
     * @description The new status of the user. Valid values:
     *
     *   Enabled: The logon of the user is enabled.
     *   Disabled: The logon of the user is disabled.
     *
     * @example Disabled
     *
     * @var string
     */
    public $newStatus;

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
        'newStatus'   => 'NewStatus',
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
        if (null !== $this->newStatus) {
            $res['NewStatus'] = $this->newStatus;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateUserStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['NewStatus'])) {
            $model->newStatus = $map['NewStatus'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
