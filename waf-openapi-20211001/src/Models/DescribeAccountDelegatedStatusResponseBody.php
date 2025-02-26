<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;

class DescribeAccountDelegatedStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $accountId;
    /**
     * @var string
     */
    public $accountName;
    /**
     * @var bool
     */
    public $delegatedStatus;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
