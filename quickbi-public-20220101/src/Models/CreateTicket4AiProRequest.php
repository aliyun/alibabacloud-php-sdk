<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Dara\Model;

class CreateTicket4AiProRequest extends Model
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
    public $aiProId;

    /**
     * @var string
     */
    public $customParam;

    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var string
     */
    public $quickBIUserId;

    /**
     * @var string
     */
    public $systemUid;

    /**
     * @var int
     */
    public $ticketNum;
    protected $_name = [
        'accountName' => 'AccountName',
        'accountType' => 'AccountType',
        'aiProId' => 'AiProId',
        'customParam' => 'CustomParam',
        'expireTime' => 'ExpireTime',
        'quickBIUserId' => 'QuickBIUserId',
        'systemUid' => 'SystemUid',
        'ticketNum' => 'TicketNum',
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

        if (null !== $this->aiProId) {
            $res['AiProId'] = $this->aiProId;
        }

        if (null !== $this->customParam) {
            $res['CustomParam'] = $this->customParam;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->quickBIUserId) {
            $res['QuickBIUserId'] = $this->quickBIUserId;
        }

        if (null !== $this->systemUid) {
            $res['SystemUid'] = $this->systemUid;
        }

        if (null !== $this->ticketNum) {
            $res['TicketNum'] = $this->ticketNum;
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

        if (isset($map['AiProId'])) {
            $model->aiProId = $map['AiProId'];
        }

        if (isset($map['CustomParam'])) {
            $model->customParam = $map['CustomParam'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['QuickBIUserId'])) {
            $model->quickBIUserId = $map['QuickBIUserId'];
        }

        if (isset($map['SystemUid'])) {
            $model->systemUid = $map['SystemUid'];
        }

        if (isset($map['TicketNum'])) {
            $model->ticketNum = $map['TicketNum'];
        }

        return $model;
    }
}
