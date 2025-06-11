<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Dara\Model;

class UpdateUserProvisioningRequest extends Model
{
    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var string
     */
    public $newDeletionStrategy;

    /**
     * @var string
     */
    public $newDescription;

    /**
     * @var string
     */
    public $newDuplicationStrategy;

    /**
     * @var string
     */
    public $userProvisioningId;
    protected $_name = [
        'directoryId' => 'DirectoryId',
        'newDeletionStrategy' => 'NewDeletionStrategy',
        'newDescription' => 'NewDescription',
        'newDuplicationStrategy' => 'NewDuplicationStrategy',
        'userProvisioningId' => 'UserProvisioningId',
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
