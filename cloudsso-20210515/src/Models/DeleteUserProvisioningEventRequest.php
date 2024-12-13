<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Tea\Model;

class DeleteUserProvisioningEventRequest extends Model
{
    /**
     * @description The ID of the resource directory.
     *
     * @example d-003qew84****
     *
     * @var string
     */
    public $directoryId;

    /**
     * @description The ID of the RAM user provisioning event.
     *
     * You can call the [ListUserProvisioningEvents](https://help.aliyun.com/document_detail/2636305.html) operation to query the value of `EventId`.
     * @example upe-wjKyNDmZvyZOiRcJ****
     *
     * @var string
     */
    public $eventId;

    /**
     * @description The ID of the RAM user provisioning.
     *
     * @example up-002axzhapcbz6e63****
     *
     * @var string
     */
    public $userProvisioningId;
    protected $_name = [
        'directoryId'        => 'DirectoryId',
        'eventId'            => 'EventId',
        'userProvisioningId' => 'UserProvisioningId',
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
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }
        if (null !== $this->userProvisioningId) {
            $res['UserProvisioningId'] = $this->userProvisioningId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteUserProvisioningEventRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }
        if (isset($map['UserProvisioningId'])) {
            $model->userProvisioningId = $map['UserProvisioningId'];
        }

        return $model;
    }
}
