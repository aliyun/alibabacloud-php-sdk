<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\QueryConferenceMembersResponseBody;

use AlibabaCloud\Dara\Model;

class memberModels extends Model
{
    /**
     * @var int
     */
    public $attendStatus;

    /**
     * @var bool
     */
    public $coHost;

    /**
     * @var string
     */
    public $conferenceId;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var bool
     */
    public $host;

    /**
     * @var int
     */
    public $joinTime;

    /**
     * @var int
     */
    public $leaveTime;

    /**
     * @var bool
     */
    public $outerOrgMember;

    /**
     * @var bool
     */
    public $pstnJoin;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userNick;
    protected $_name = [
        'attendStatus' => 'AttendStatus',
        'coHost' => 'CoHost',
        'conferenceId' => 'ConferenceId',
        'duration' => 'Duration',
        'host' => 'Host',
        'joinTime' => 'JoinTime',
        'leaveTime' => 'LeaveTime',
        'outerOrgMember' => 'OuterOrgMember',
        'pstnJoin' => 'PstnJoin',
        'userId' => 'UserId',
        'userNick' => 'UserNick',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attendStatus) {
            $res['AttendStatus'] = $this->attendStatus;
        }

        if (null !== $this->coHost) {
            $res['CoHost'] = $this->coHost;
        }

        if (null !== $this->conferenceId) {
            $res['ConferenceId'] = $this->conferenceId;
        }

        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }

        if (null !== $this->joinTime) {
            $res['JoinTime'] = $this->joinTime;
        }

        if (null !== $this->leaveTime) {
            $res['LeaveTime'] = $this->leaveTime;
        }

        if (null !== $this->outerOrgMember) {
            $res['OuterOrgMember'] = $this->outerOrgMember;
        }

        if (null !== $this->pstnJoin) {
            $res['PstnJoin'] = $this->pstnJoin;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        if (null !== $this->userNick) {
            $res['UserNick'] = $this->userNick;
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
        if (isset($map['AttendStatus'])) {
            $model->attendStatus = $map['AttendStatus'];
        }

        if (isset($map['CoHost'])) {
            $model->coHost = $map['CoHost'];
        }

        if (isset($map['ConferenceId'])) {
            $model->conferenceId = $map['ConferenceId'];
        }

        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }

        if (isset($map['JoinTime'])) {
            $model->joinTime = $map['JoinTime'];
        }

        if (isset($map['LeaveTime'])) {
            $model->leaveTime = $map['LeaveTime'];
        }

        if (isset($map['OuterOrgMember'])) {
            $model->outerOrgMember = $map['OuterOrgMember'];
        }

        if (isset($map['PstnJoin'])) {
            $model->pstnJoin = $map['PstnJoin'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        if (isset($map['UserNick'])) {
            $model->userNick = $map['UserNick'];
        }

        return $model;
    }
}
