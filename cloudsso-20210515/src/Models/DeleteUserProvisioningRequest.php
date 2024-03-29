<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Tea\Model;

class DeleteUserProvisioningRequest extends Model
{
    /**
     * @description The deletion policy. The policy is used to manage synchronized users when you delete the RAM user provisioning. Valid values:
     *
     *   Delete: When you delete the RAM user provisioning, the system deletes the synchronized users.
     *   Keep: When you delete the RAM user provisioning, the system retains the synchronized users.
     *
     * >  If you do not specify this parameter, the deletion policy that is configured when you create the RAM user provisioning is used.
     * @example Delete
     *
     * @var string
     */
    public $deletionStrategy;

    /**
     * @description The ID of the resource directory.
     *
     * @example d-003qew84****
     *
     * @var string
     */
    public $directoryId;

    /**
     * @description The ID of the RAM user provisioning.
     *
     * @example up-002axzhapcbz6e63****
     *
     * @var string
     */
    public $userProvisioningId;
    protected $_name = [
        'deletionStrategy'   => 'DeletionStrategy',
        'directoryId'        => 'DirectoryId',
        'userProvisioningId' => 'UserProvisioningId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deletionStrategy) {
            $res['DeletionStrategy'] = $this->deletionStrategy;
        }
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->userProvisioningId) {
            $res['UserProvisioningId'] = $this->userProvisioningId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteUserProvisioningRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeletionStrategy'])) {
            $model->deletionStrategy = $map['DeletionStrategy'];
        }
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['UserProvisioningId'])) {
            $model->userProvisioningId = $map['UserProvisioningId'];
        }

        return $model;
    }
}
