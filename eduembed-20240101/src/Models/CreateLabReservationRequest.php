<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EduEmbed\V20240101\Models;

use AlibabaCloud\Tea\Model;

class CreateLabReservationRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 16600
     *
     * @var int
     */
    public $accountId;

    /**
     * @description This parameter is required.
     *
     * @example 2023-04-29 18:00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @description This parameter is required.
     *
     * @example 875
     *
     * @var int
     */
    public $labId;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $memberCount;

    /**
     * @description This parameter is required.
     *
     * @example 2023-04-29 16:00:00
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'accountId'   => 'AccountId',
        'endTime'     => 'EndTime',
        'labId'       => 'LabId',
        'memberCount' => 'MemberCount',
        'startTime'   => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return CreateLabReservationRequest
     */
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
