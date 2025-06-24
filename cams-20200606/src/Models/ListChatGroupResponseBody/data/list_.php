<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\ListChatGroupResponseBody\data;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $businessNumber;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupStatus;

    /**
     * @var string
     */
    public $inviteLink;

    /**
     * @var string
     */
    public $profilePictureFile;

    /**
     * @var string
     */
    public $subject;
    protected $_name = [
        'businessNumber' => 'BusinessNumber',
        'description' => 'Description',
        'groupId' => 'GroupId',
        'groupStatus' => 'GroupStatus',
        'inviteLink' => 'InviteLink',
        'profilePictureFile' => 'ProfilePictureFile',
        'subject' => 'Subject',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->businessNumber) {
            $res['BusinessNumber'] = $this->businessNumber;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->groupStatus) {
            $res['GroupStatus'] = $this->groupStatus;
        }

        if (null !== $this->inviteLink) {
            $res['InviteLink'] = $this->inviteLink;
        }

        if (null !== $this->profilePictureFile) {
            $res['ProfilePictureFile'] = $this->profilePictureFile;
        }

        if (null !== $this->subject) {
            $res['Subject'] = $this->subject;
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
        if (isset($map['BusinessNumber'])) {
            $model->businessNumber = $map['BusinessNumber'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['GroupStatus'])) {
            $model->groupStatus = $map['GroupStatus'];
        }

        if (isset($map['InviteLink'])) {
            $model->inviteLink = $map['InviteLink'];
        }

        if (isset($map['ProfilePictureFile'])) {
            $model->profilePictureFile = $map['ProfilePictureFile'];
        }

        if (isset($map['Subject'])) {
            $model->subject = $map['Subject'];
        }

        return $model;
    }
}
