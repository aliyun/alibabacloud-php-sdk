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
    public $businessRole;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $gmtModifier;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupLink;

    /**
     * @var string
     */
    public $groupStatus;

    /**
     * @var string
     */
    public $groupType;

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

    /**
     * @var int
     */
    public $totalParticipantCount;
    protected $_name = [
        'businessNumber' => 'BusinessNumber',
        'businessRole' => 'BusinessRole',
        'description' => 'Description',
        'gmtModifier' => 'GmtModifier',
        'groupId' => 'GroupId',
        'groupLink' => 'GroupLink',
        'groupStatus' => 'GroupStatus',
        'groupType' => 'GroupType',
        'inviteLink' => 'InviteLink',
        'profilePictureFile' => 'ProfilePictureFile',
        'subject' => 'Subject',
        'totalParticipantCount' => 'TotalParticipantCount',
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

        if (null !== $this->businessRole) {
            $res['BusinessRole'] = $this->businessRole;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->gmtModifier) {
            $res['GmtModifier'] = $this->gmtModifier;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->groupLink) {
            $res['GroupLink'] = $this->groupLink;
        }

        if (null !== $this->groupStatus) {
            $res['GroupStatus'] = $this->groupStatus;
        }

        if (null !== $this->groupType) {
            $res['GroupType'] = $this->groupType;
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

        if (null !== $this->totalParticipantCount) {
            $res['TotalParticipantCount'] = $this->totalParticipantCount;
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

        if (isset($map['BusinessRole'])) {
            $model->businessRole = $map['BusinessRole'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['GmtModifier'])) {
            $model->gmtModifier = $map['GmtModifier'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['GroupLink'])) {
            $model->groupLink = $map['GroupLink'];
        }

        if (isset($map['GroupStatus'])) {
            $model->groupStatus = $map['GroupStatus'];
        }

        if (isset($map['GroupType'])) {
            $model->groupType = $map['GroupType'];
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

        if (isset($map['TotalParticipantCount'])) {
            $model->totalParticipantCount = $map['TotalParticipantCount'];
        }

        return $model;
    }
}
