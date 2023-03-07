<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryFinancialAccountInfoResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The type of the financial account. A value of MASTER indicates that the account is a management account. A value of MEMBER indicates that the account is a member.
     *
     * @example MEMBER
     *
     * @var string
     */
    public $accountType;

    /**
     * @description Indicates whether the account is a financial account. A value of true indicates that the account is a financial account. A value of false indicates that the account is not a financial account.
     *
     * @example true
     *
     * @var bool
     */
    public $isFinancialAccount;

    /**
     * @description The ID of the group to which the member belongs.
     *
     * @example 124
     *
     * @var int
     */
    public $memberGroupId;

    /**
     * @description The name of the group to which the member belongs.
     *
     * @example Test group
     *
     * @var string
     */
    public $memberGroupName;

    /**
     * @description The display name of the member.
     *
     * @example Test
     *
     * @var string
     */
    public $memberNickName;

    /**
     * @description The username of the account.
     *
     * @example killortop3
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'accountType'        => 'AccountType',
        'isFinancialAccount' => 'IsFinancialAccount',
        'memberGroupId'      => 'MemberGroupId',
        'memberGroupName'    => 'MemberGroupName',
        'memberNickName'     => 'MemberNickName',
        'userName'           => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }
        if (null !== $this->isFinancialAccount) {
            $res['IsFinancialAccount'] = $this->isFinancialAccount;
        }
        if (null !== $this->memberGroupId) {
            $res['MemberGroupId'] = $this->memberGroupId;
        }
        if (null !== $this->memberGroupName) {
            $res['MemberGroupName'] = $this->memberGroupName;
        }
        if (null !== $this->memberNickName) {
            $res['MemberNickName'] = $this->memberNickName;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
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
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['IsFinancialAccount'])) {
            $model->isFinancialAccount = $map['IsFinancialAccount'];
        }
        if (isset($map['MemberGroupId'])) {
            $model->memberGroupId = $map['MemberGroupId'];
        }
        if (isset($map['MemberGroupName'])) {
            $model->memberGroupName = $map['MemberGroupName'];
        }
        if (isset($map['MemberNickName'])) {
            $model->memberNickName = $map['MemberNickName'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
