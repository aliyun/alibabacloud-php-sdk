<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imarketing\V20220704\Models\QueryFinanceUserInfoResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 123456
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 100
     *
     * @var int
     */
    public $totalIncomeAmount;

    /**
     * @example A
     *
     * @var string
     */
    public $userPageType;

    /**
     * @example 100
     *
     * @var int
     */
    public $yesterdayIncomeAmount;
    protected $_name = [
        'requestId'             => 'RequestId',
        'totalIncomeAmount'     => 'TotalIncomeAmount',
        'userPageType'          => 'UserPageType',
        'yesterdayIncomeAmount' => 'YesterdayIncomeAmount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalIncomeAmount) {
            $res['TotalIncomeAmount'] = $this->totalIncomeAmount;
        }
        if (null !== $this->userPageType) {
            $res['UserPageType'] = $this->userPageType;
        }
        if (null !== $this->yesterdayIncomeAmount) {
            $res['YesterdayIncomeAmount'] = $this->yesterdayIncomeAmount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalIncomeAmount'])) {
            $model->totalIncomeAmount = $map['TotalIncomeAmount'];
        }
        if (isset($map['UserPageType'])) {
            $model->userPageType = $map['UserPageType'];
        }
        if (isset($map['YesterdayIncomeAmount'])) {
            $model->yesterdayIncomeAmount = $map['YesterdayIncomeAmount'];
        }

        return $model;
    }
}
