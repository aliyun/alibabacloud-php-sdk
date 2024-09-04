<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Marketing_event\V20210101\Models\FindGuestTicketRecordResponseBody;

use AlibabaCloud\SDK\Marketing_event\V20210101\Models\FindGuestTicketRecordResponseBody\data\channelLevelInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var channelLevelInfo
     */
    public $channelLevelInfo;

    /**
     * @var string
     */
    public $companyName;

    /**
     * @example 2023-10-31,2023-11-02
     *
     * @var string
     */
    public $equityDates;

    /**
     * @example -1
     *
     * @var int
     */
    public $healthCommitmentStatus;

    /**
     * @example IjEqZpp8Wn29+sqOr3hxXuOqn6CyKYNSQ5dmMA0txiM=
     *
     * @var string
     */
    public $idNumber;

    /**
     * @var string
     */
    public $idType;

    /**
     * @var string
     */
    public $name;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @example 3702-10240842
     *
     * @var string
     */
    public $ticketCode;

    /**
     * @var string
     */
    public $ticketName;

    /**
     * @example 1
     *
     * @var string
     */
    public $ticketType;
    protected $_name = [
        'channelLevelInfo'       => 'ChannelLevelInfo',
        'companyName'            => 'CompanyName',
        'equityDates'            => 'EquityDates',
        'healthCommitmentStatus' => 'HealthCommitmentStatus',
        'idNumber'               => 'IdNumber',
        'idType'                 => 'IdType',
        'name'                   => 'Name',
        'status'                 => 'Status',
        'ticketCode'             => 'TicketCode',
        'ticketName'             => 'TicketName',
        'ticketType'             => 'TicketType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelLevelInfo) {
            $res['ChannelLevelInfo'] = null !== $this->channelLevelInfo ? $this->channelLevelInfo->toMap() : null;
        }
        if (null !== $this->companyName) {
            $res['CompanyName'] = $this->companyName;
        }
        if (null !== $this->equityDates) {
            $res['EquityDates'] = $this->equityDates;
        }
        if (null !== $this->healthCommitmentStatus) {
            $res['HealthCommitmentStatus'] = $this->healthCommitmentStatus;
        }
        if (null !== $this->idNumber) {
            $res['IdNumber'] = $this->idNumber;
        }
        if (null !== $this->idType) {
            $res['IdType'] = $this->idType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->ticketCode) {
            $res['TicketCode'] = $this->ticketCode;
        }
        if (null !== $this->ticketName) {
            $res['TicketName'] = $this->ticketName;
        }
        if (null !== $this->ticketType) {
            $res['TicketType'] = $this->ticketType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelLevelInfo'])) {
            $model->channelLevelInfo = channelLevelInfo::fromMap($map['ChannelLevelInfo']);
        }
        if (isset($map['CompanyName'])) {
            $model->companyName = $map['CompanyName'];
        }
        if (isset($map['EquityDates'])) {
            $model->equityDates = $map['EquityDates'];
        }
        if (isset($map['HealthCommitmentStatus'])) {
            $model->healthCommitmentStatus = $map['HealthCommitmentStatus'];
        }
        if (isset($map['IdNumber'])) {
            $model->idNumber = $map['IdNumber'];
        }
        if (isset($map['IdType'])) {
            $model->idType = $map['IdType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TicketCode'])) {
            $model->ticketCode = $map['TicketCode'];
        }
        if (isset($map['TicketName'])) {
            $model->ticketName = $map['TicketName'];
        }
        if (isset($map['TicketType'])) {
            $model->ticketType = $map['TicketType'];
        }

        return $model;
    }
}
