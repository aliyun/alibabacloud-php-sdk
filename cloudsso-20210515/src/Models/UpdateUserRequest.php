<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Tea\Model;

class UpdateUserRequest extends Model
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
     * @description The new description of the user.
     *
     * @example This is a user.
     *
     * @var string
     */
    public $newDescription;

    /**
     * @description The new display name of the user.
     *
     * @example AliceLee
     *
     * @var string
     */
    public $newDisplayName;

    /**
     * @description The new email address of the user.
     *
     * @example AliceLee@example.com
     *
     * @var string
     */
    public $newEmail;

    /**
     * @description The new first name of the user.
     *
     * @example Alice
     *
     * @var string
     */
    public $newFirstName;

    /**
     * @description The new last name of the user.
     *
     * @example Lee
     *
     * @var string
     */
    public $newLastName;

    /**
     * @description The ID of the user.
     *
     * @example u-00q8wbq42wiltcrk****
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'directoryId'    => 'DirectoryId',
        'newDescription' => 'NewDescription',
        'newDisplayName' => 'NewDisplayName',
        'newEmail'       => 'NewEmail',
        'newFirstName'   => 'NewFirstName',
        'newLastName'    => 'NewLastName',
        'userId'         => 'UserId',
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

    /**
     * @param array $map
     *
     * @return UpdateUserRequest
     */
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
