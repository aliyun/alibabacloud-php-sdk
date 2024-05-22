<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class CreateTicket4CopilotRequest extends Model
{
    /**
     * @var string
     */
    public $accountName;

    /**
     * @example 1
     *
     * @var int
     */
    public $accountType;

    /**
     * @description This parameter is required.
     *
     * @example ccd3428c-dd23-460c-a608-26bae29dffee
     *
     * @var string
     */
    public $copilotId;

    /**
     * @example 200
     *
     * @var int
     */
    public $expireTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $ticketNum;

    /**
     * @example 9c-asdawf-casxcasd-asdasd
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'accountName' => 'AccountName',
        'accountType' => 'AccountType',
        'copilotId'   => 'CopilotId',
        'expireTime'  => 'ExpireTime',
        'ticketNum'   => 'TicketNum',
        'userId'      => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }
        if (null !== $this->copilotId) {
            $res['CopilotId'] = $this->copilotId;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->ticketNum) {
            $res['TicketNum'] = $this->ticketNum;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTicket4CopilotRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['CopilotId'])) {
            $model->copilotId = $map['CopilotId'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['TicketNum'])) {
            $model->ticketNum = $map['TicketNum'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
