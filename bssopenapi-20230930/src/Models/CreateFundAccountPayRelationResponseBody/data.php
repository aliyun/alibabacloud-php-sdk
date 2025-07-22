<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models\CreateFundAccountPayRelationResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1501603440974415
     *
     * @var string
     */
    public $accountId;

    /**
     * @example test@test.aliyunid.com
     *
     * @var string
     */
    public $accountName;

    /**
     * @example 12332112
     *
     * @var string
     */
    public $fundAccountId;

    /**
     * @example Success
     *
     * @var string
     */
    public $resultCode;

    /**
     * @example Successful
     *
     * @var string
     */
    public $resultMessage;
    protected $_name = [
        'accountId' => 'AccountId',
        'accountName' => 'AccountName',
        'fundAccountId' => 'FundAccountId',
        'resultCode' => 'ResultCode',
        'resultMessage' => 'ResultMessage',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->fundAccountId) {
            $res['FundAccountId'] = $this->fundAccountId;
        }
        if (null !== $this->resultCode) {
            $res['ResultCode'] = $this->resultCode;
        }
        if (null !== $this->resultMessage) {
            $res['ResultMessage'] = $this->resultMessage;
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
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['FundAccountId'])) {
            $model->fundAccountId = $map['FundAccountId'];
        }
        if (isset($map['ResultCode'])) {
            $model->resultCode = $map['ResultCode'];
        }
        if (isset($map['ResultMessage'])) {
            $model->resultMessage = $map['ResultMessage'];
        }

        return $model;
    }
}
