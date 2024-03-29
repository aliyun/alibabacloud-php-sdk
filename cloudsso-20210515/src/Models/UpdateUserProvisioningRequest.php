<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Tea\Model;

class UpdateUserProvisioningRequest extends Model
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
     * @description The new deletion policy. The policy is used to manage synchronized users when you delete the RAM user provisioning. Valid values:
     *
     *   Delete: When you delete the RAM user provisioning, the system deletes the synchronized users.
     *   Keep: When you delete the RAM user provisioning, the system retains the synchronized users.
     *
     * @example Delete
     *
     * @var string
     */
    public $newDeletionStrategy;

    /**
     * @description The new description of the RAM user provisioning.
     *
     * @example description*****
     *
     * @var string
     */
    public $newDescription;

    /**
     * @description The new conflict handling policy. The policy is used when a RAM user has the same username as the CloudSSO user who is synchronized to RAM. Valid values:
     *
     *   KeepBoth: When a CloudSSO user is synchronized to RAM, if a RAM user who has the same username as the CloudSSO user exists, the system creates a RAM user whose username is the username of the CloudSSO user plus the suffix `_sso`.
     *   TakeOver: When a CloudSSO user is synchronized to RAM, if a RAM user who has the same username as the CloudSSO user exists, the system replaces the RAM user with the CloudSSO user.
     *
     * @example KeepBoth
     *
     * @var string
     */
    public $newDuplicationStrategy;

    /**
     * @description The ID of the RAM user provisioning.
     *
     * @example up-002axzhapcbz6e63****
     *
     * @var string
     */
    public $userProvisioningId;
    protected $_name = [
        'directoryId'            => 'DirectoryId',
        'newDeletionStrategy'    => 'NewDeletionStrategy',
        'newDescription'         => 'NewDescription',
        'newDuplicationStrategy' => 'NewDuplicationStrategy',
        'userProvisioningId'     => 'UserProvisioningId',
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
        if (null !== $this->newDeletionStrategy) {
            $res['NewDeletionStrategy'] = $this->newDeletionStrategy;
        }
        if (null !== $this->newDescription) {
            $res['NewDescription'] = $this->newDescription;
        }
        if (null !== $this->newDuplicationStrategy) {
            $res['NewDuplicationStrategy'] = $this->newDuplicationStrategy;
        }
        if (null !== $this->userProvisioningId) {
            $res['UserProvisioningId'] = $this->userProvisioningId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateUserProvisioningRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['NewDeletionStrategy'])) {
            $model->newDeletionStrategy = $map['NewDeletionStrategy'];
        }
        if (isset($map['NewDescription'])) {
            $model->newDescription = $map['NewDescription'];
        }
        if (isset($map['NewDuplicationStrategy'])) {
            $model->newDuplicationStrategy = $map['NewDuplicationStrategy'];
        }
        if (isset($map['UserProvisioningId'])) {
            $model->userProvisioningId = $map['UserProvisioningId'];
        }

        return $model;
    }
}
