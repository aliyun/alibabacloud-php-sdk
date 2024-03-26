<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class DescribeAccountDelegatedStatusResponseBody extends Model
{
    /**
     * @example 10***********34
     *
     * @var string
     */
    public $accountId;

    /**
     * @example account_test
     *
     * @var string
     */
    public $accountName;

    /**
     * @example true
     *
     * @var bool
     */
    public $delegatedStatus;

    /**
     * @example 8161375D-5958-5627-BFDE-DF1458A73E87
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accountId'       => 'AccountId',
        'accountName'     => 'AccountName',
        'delegatedStatus' => 'DelegatedStatus',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->delegatedStatus) {
            $res['DelegatedStatus'] = $this->delegatedStatus;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAccountDelegatedStatusResponseBody
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
        if (isset($map['DelegatedStatus'])) {
            $model->delegatedStatus = $map['DelegatedStatus'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
