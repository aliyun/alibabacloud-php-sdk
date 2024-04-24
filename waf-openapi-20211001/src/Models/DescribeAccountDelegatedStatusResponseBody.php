<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class DescribeAccountDelegatedStatusResponseBody extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account.
     *
     * @example 10***********34
     *
     * @var string
     */
    public $accountId;

    /**
     * @description The name of the Alibaba Cloud account. This parameter is returned only if the account is the delegated administrator account.
     *
     * @example account_test
     *
     * @var string
     */
    public $accountName;

    /**
     * @description Indicates whether the Alibaba Cloud account is the delegated administrator account of the WAF instance.
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $delegatedStatus;

    /**
     * @description The request ID.
     *
     * @example 8161375D-5958-5627-BFDE-DF14****3E87
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
