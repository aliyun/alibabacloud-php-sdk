<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models\GetDataStorageResponseBody\data\sasLogStores;

use AlibabaCloud\Dara\Model;

class accountDeliveries extends Model
{
    /**
     * @var int
     */
    public $accountId;

    /**
     * @var string
     */
    public $accountName;

    /**
     * @var bool
     */
    public $isDaAccount;

    /**
     * @var string
     */
    public $logDeliveryStatus;

    /**
     * @var string
     */
    public $logDeliveryUpdateTime;
    protected $_name = [
        'accountId' => 'AccountId',
        'accountName' => 'AccountName',
        'isDaAccount' => 'IsDaAccount',
        'logDeliveryStatus' => 'LogDeliveryStatus',
        'logDeliveryUpdateTime' => 'LogDeliveryUpdateTime',
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

        if (null !== $this->isDaAccount) {
            $res['IsDaAccount'] = $this->isDaAccount;
        }

        if (null !== $this->logDeliveryStatus) {
            $res['LogDeliveryStatus'] = $this->logDeliveryStatus;
        }

        if (null !== $this->logDeliveryUpdateTime) {
            $res['LogDeliveryUpdateTime'] = $this->logDeliveryUpdateTime;
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

        if (isset($map['IsDaAccount'])) {
            $model->isDaAccount = $map['IsDaAccount'];
        }

        if (isset($map['LogDeliveryStatus'])) {
            $model->logDeliveryStatus = $map['LogDeliveryStatus'];
        }

        if (isset($map['LogDeliveryUpdateTime'])) {
            $model->logDeliveryUpdateTime = $map['LogDeliveryUpdateTime'];
        }

        return $model;
    }
}
