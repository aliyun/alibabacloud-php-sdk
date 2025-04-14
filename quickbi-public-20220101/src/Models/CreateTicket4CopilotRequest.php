<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Dara\Model;

class CreateTicket4CopilotRequest extends Model
{
    /**
     * @var string
     */
    public $accountName;

    /**
     * @var int
     */
    public $accountType;

    /**
     * @var string
     */
    public $copilotId;

    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var int
     */
    public $ticketNum;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'accountName' => 'AccountName',
        'accountType' => 'AccountType',
        'copilotId' => 'CopilotId',
        'expireTime' => 'ExpireTime',
        'ticketNum' => 'TicketNum',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
