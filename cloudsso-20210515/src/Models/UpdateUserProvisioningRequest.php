<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Tea\Model;

class UpdateUserProvisioningRequest extends Model
{
    /**
     * @example d-003qew84****
     *
     * @var string
     */
    public $directoryId;

    /**
     * @example Delete
     *
     * @var string
     */
    public $newDeletionStrategy;

    /**
     * @example description*****
     *
     * @var string
     */
    public $newDescription;

    /**
     * @example KeepBoth
     *
     * @var string
     */
    public $newDuplicationStrategy;

    /**
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
