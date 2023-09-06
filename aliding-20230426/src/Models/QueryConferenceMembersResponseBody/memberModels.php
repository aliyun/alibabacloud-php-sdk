<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\QueryConferenceMembersResponseBody;

use AlibabaCloud\Tea\Model;

class memberModels extends Model
{
    /**
     * @example 6
     *
     * @var int
     */
    public $attendStatus;

    /**
     * @example false
     *
     * @var bool
     */
    public $coHost;

    /**
     * @example 6323dxxxxx
     *
     * @var string
     */
    public $conferenceId;

    /**
     * @example 10000
     *
     * @var int
     */
    public $duration;

    /**
     * @example false
     *
     * @var bool
     */
    public $host;

    /**
     * @example 1663293270000
     *
     * @var int
     */
    public $joinTime;

    /**
     * @example 1663293280000
     *
     * @var int
     */
    public $leaveTime;

    /**
     * @example true
     *
     * @var bool
     */
    public $outerOrgMember;

    /**
     * @example false
     *
     * @var bool
     */
    public $pstnJoin;

    /**
     * @example -12345
     *
     * @var string
     */
    public $userId;

    /**
     * @example 小钉
     *
     * @var string
     */
    public $userNick;
    protected $_name = [
        'attendStatus'   => 'AttendStatus',
        'coHost'         => 'CoHost',
        'conferenceId'   => 'ConferenceId',
        'duration'       => 'Duration',
        'host'           => 'Host',
        'joinTime'       => 'JoinTime',
        'leaveTime'      => 'LeaveTime',
        'outerOrgMember' => 'OuterOrgMember',
        'pstnJoin'       => 'PstnJoin',
        'userId'         => 'UserId',
        'userNick'       => 'UserNick',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return memberModels
     */
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
