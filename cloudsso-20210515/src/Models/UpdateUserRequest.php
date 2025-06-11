<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Dara\Model;

class UpdateUserRequest extends Model
{
    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var string
     */
    public $newDescription;

    /**
     * @var string
     */
    public $newDisplayName;

    /**
     * @var string
     */
    public $newEmail;

    /**
     * @var string
     */
    public $newFirstName;

    /**
     * @var string
     */
    public $newLastName;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'directoryId' => 'DirectoryId',
        'newDescription' => 'NewDescription',
        'newDisplayName' => 'NewDisplayName',
        'newEmail' => 'NewEmail',
        'newFirstName' => 'NewFirstName',
        'newLastName' => 'NewLastName',
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

        if (null !== $this->newDescription) {
            $res['NewDescription'] = $this->newDescription;
        }

        if (null !== $this->newDisplayName) {
            $res['NewDisplayName'] = $this->newDisplayName;
        }

        if (null !== $this->newEmail) {
            $res['NewEmail'] = $this->newEmail;
        }

        if (null !== $this->newFirstName) {
            $res['NewFirstName'] = $this->newFirstName;
        }

        if (null !== $this->newLastName) {
            $res['NewLastName'] = $this->newLastName;
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

        if (isset($map['NewDescription'])) {
            $model->newDescription = $map['NewDescription'];
        }

        if (isset($map['NewDisplayName'])) {
            $model->newDisplayName = $map['NewDisplayName'];
        }

        if (isset($map['NewEmail'])) {
            $model->newEmail = $map['NewEmail'];
        }

        if (isset($map['NewFirstName'])) {
            $model->newFirstName = $map['NewFirstName'];
        }

        if (isset($map['NewLastName'])) {
            $model->newLastName = $map['NewLastName'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
