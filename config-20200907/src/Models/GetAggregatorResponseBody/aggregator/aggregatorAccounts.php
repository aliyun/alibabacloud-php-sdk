<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetAggregatorResponseBody\aggregator;

use AlibabaCloud\Tea\Model;

class aggregatorAccounts extends Model
{
    /**
     * @var string
     */
    public $recorderStatus;

    /**
     * @var int
     */
    public $accountId;

    /**
     * @var string
     */
    public $accountType;

    /**
     * @var string
     */
    public $accountName;
    protected $_name = [
        'recorderStatus' => 'RecorderStatus',
        'accountId'      => 'AccountId',
        'accountType'    => 'AccountType',
        'accountName'    => 'AccountName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->recorderStatus) {
            $res['RecorderStatus'] = $this->recorderStatus;
        }
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return aggregatorAccounts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RecorderStatus'])) {
            $model->recorderStatus = $map['RecorderStatus'];
        }
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }

        return $model;
    }
}
