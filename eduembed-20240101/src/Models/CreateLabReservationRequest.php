<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EduEmbed\V20240101\Models;

use AlibabaCloud\Dara\Model;

class CreateLabReservationRequest extends Model
{
    /**
     * @var int
     */
    public $accountId;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $labId;

    /**
     * @var int
     */
    public $memberCount;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'accountId' => 'AccountId',
        'endTime' => 'EndTime',
        'labId' => 'LabId',
        'memberCount' => 'MemberCount',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->labId) {
            $res['LabId'] = $this->labId;
        }

        if (null !== $this->memberCount) {
            $res['MemberCount'] = $this->memberCount;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['LabId'])) {
            $model->labId = $map['LabId'];
        }

        if (isset($map['MemberCount'])) {
            $model->memberCount = $map['MemberCount'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
