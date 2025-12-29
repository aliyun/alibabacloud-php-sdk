<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\QueryHotelRoomDetailResponseBody\result;

use AlibabaCloud\Dara\Model;

class authAccounts extends Model
{
    /**
     * @var string
     */
    public $accountName;

    /**
     * @var string
     */
    public $authTime;
    protected $_name = [
        'accountName' => 'AccountName',
        'authTime' => 'AuthTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }

        if (null !== $this->authTime) {
            $res['AuthTime'] = $this->authTime;
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
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }

        if (isset($map['AuthTime'])) {
            $model->authTime = $map['AuthTime'];
        }

        return $model;
    }
}
