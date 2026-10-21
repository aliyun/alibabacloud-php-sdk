<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models\GetDataStorageResponseBody\data\deliverySettings;

use AlibabaCloud\Dara\Model;

class accounts extends Model
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
    public $authorized;

    /**
     * @var bool
     */
    public $daAccount;
    protected $_name = [
        'accountId' => 'AccountId',
        'accountName' => 'AccountName',
        'authorized' => 'Authorized',
        'daAccount' => 'DaAccount',
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

        if (null !== $this->authorized) {
            $res['Authorized'] = $this->authorized;
        }

        if (null !== $this->daAccount) {
            $res['DaAccount'] = $this->daAccount;
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

        if (isset($map['Authorized'])) {
            $model->authorized = $map['Authorized'];
        }

        if (isset($map['DaAccount'])) {
            $model->daAccount = $map['DaAccount'];
        }

        return $model;
    }
}
