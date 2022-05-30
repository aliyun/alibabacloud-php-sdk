<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GetDutyRosterRequest extends Model
{
    /**
     * @var int
     */
    public $beginTime;

    /**
     * @var string
     */
    public $dutyRosterIdentifier;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $userType;

    /**
     * @var string
     */
    public $watchkeeper;
    protected $_name = [
        'beginTime'            => 'BeginTime',
        'dutyRosterIdentifier' => 'DutyRosterIdentifier',
        'endTime'              => 'EndTime',
        'userType'             => 'UserType',
        'watchkeeper'          => 'Watchkeeper',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->dutyRosterIdentifier) {
            $res['DutyRosterIdentifier'] = $this->dutyRosterIdentifier;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->userType) {
            $res['UserType'] = $this->userType;
        }
        if (null !== $this->watchkeeper) {
            $res['Watchkeeper'] = $this->watchkeeper;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDutyRosterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['DutyRosterIdentifier'])) {
            $model->dutyRosterIdentifier = $map['DutyRosterIdentifier'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['UserType'])) {
            $model->userType = $map['UserType'];
        }
        if (isset($map['Watchkeeper'])) {
            $model->watchkeeper = $map['Watchkeeper'];
        }

        return $model;
    }
}
