<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class CreateTicket4CopilotRequest extends Model
{
    /**
     * @description User\\"s account name.
     * <notice>Note: Only one of userId and accountName needs to be filled in. If neither is provided, it will default to the report owner, and the report will be accessed with that user\\"s identity.</notice>
     *
     * @example Test user
     *
     * @var string
     */
    public $accountName;

    /**
     * @description User\\"s account type:
     *
     * - 1: Alibaba Cloud Primary Account
     *
     * - 3: Quick BI Self-built Account
     *
     * - 4: DingTalk
     *
     * - 5: Alibaba Cloud RAM Account
     *
     * - 6: Third-party Account (SAML, OAuth, etc.)
     *
     * - 9: WeCom
     *
     * - 10: Feishu
     *
     * <notice>Note: If accountName is not empty, then accountType must also be provided.</notice>
     *
     * @example 1
     *
     * @var int
     */
    public $accountType;

    /**
     * @description ID of the Smart Q module to be embedded.
     *
     * This parameter is required.
     *
     * @example ccd3*********ae29dffee
     *
     * @var string
     */
    public $copilotId;

    /**
     * @description Expiration time.
     *
     * - Unit: minutes, maximum 240 (4 hours).
     *
     * - Default: 240.
     *
     * @example 200
     *
     * @var int
     */
    public $expireTime;

    /**
     * @description Range of ticket quantity:
     *
     * - Default value is 1.
     *
     * - Recommended value is 1.
     *
     * - Maximum value is 99999.
     *
     * Each time a ticket is used, the ticket count decreases by 1.
     *
     * @example 1
     *
     * @var int
     */
    public $ticketNum;

    /**
     * @description Quick BI\\"s UserId.
     *
     * - You can obtain this by calling [3.1.7 Get User Details Based on Third-Party Account] or other relevant APIs.
     *
     * <notice>Note: Only one of userId and accountName needs to be filled in. If neither is provided, it will default to the report owner, and the report will be accessed with that user\\"s identity.</notice>
     *
     * @example 9c-asd*****asd-asdasd
     *
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

    public function validate() {}

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
