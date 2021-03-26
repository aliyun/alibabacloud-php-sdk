<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryFinancialAccountInfoResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $memberNickName;

    /**
     * @var bool
     */
    public $isFinancialAccount;

    /**
     * @var string
     */
    public $memberGroupName;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $accountType;

    /**
     * @var int
     */
    public $memberGroupId;
    protected $_name = [
        'memberNickName'     => 'MemberNickName',
        'isFinancialAccount' => 'IsFinancialAccount',
        'memberGroupName'    => 'MemberGroupName',
        'userName'           => 'UserName',
        'accountType'        => 'AccountType',
        'memberGroupId'      => 'MemberGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->memberNickName) {
            $res['MemberNickName'] = $this->memberNickName;
        }
        if (null !== $this->isFinancialAccount) {
            $res['IsFinancialAccount'] = $this->isFinancialAccount;
        }
        if (null !== $this->memberGroupName) {
            $res['MemberGroupName'] = $this->memberGroupName;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }
        if (null !== $this->memberGroupId) {
            $res['MemberGroupId'] = $this->memberGroupId;
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
        if (isset($map['MemberNickName'])) {
            $model->memberNickName = $map['MemberNickName'];
        }
        if (isset($map['IsFinancialAccount'])) {
            $model->isFinancialAccount = $map['IsFinancialAccount'];
        }
        if (isset($map['MemberGroupName'])) {
            $model->memberGroupName = $map['MemberGroupName'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['MemberGroupId'])) {
            $model->memberGroupId = $map['MemberGroupId'];
        }

        return $model;
    }
}
