<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class RegisterSettleAccountRequest extends Model
{
    /**
     * @var string
     */
    public $accountChannel;

    /**
     * @var string
     */
    public $accountName;

    /**
     * @var string
     */
    public $accountNo;

    /**
     * @var string
     */
    public $accountPayType;

    /**
     * @var string
     */
    public $accountType;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $extInfo;
    protected $_name = [
        'accountChannel' => 'AccountChannel',
        'accountName'    => 'AccountName',
        'accountNo'      => 'AccountNo',
        'accountPayType' => 'AccountPayType',
        'accountType'    => 'AccountType',
        'bizId'          => 'BizId',
        'extInfo'        => 'ExtInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountChannel) {
            $res['AccountChannel'] = $this->accountChannel;
        }
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->accountNo) {
            $res['AccountNo'] = $this->accountNo;
        }
        if (null !== $this->accountPayType) {
            $res['AccountPayType'] = $this->accountPayType;
        }
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RegisterSettleAccountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountChannel'])) {
            $model->accountChannel = $map['AccountChannel'];
        }
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['AccountNo'])) {
            $model->accountNo = $map['AccountNo'];
        }
        if (isset($map['AccountPayType'])) {
            $model->accountPayType = $map['AccountPayType'];
        }
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }

        return $model;
    }
}
