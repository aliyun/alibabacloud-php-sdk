<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\QueryHotelRoomDetailResponseBody\result;

use AlibabaCloud\Tea\Model;

class authAccounts extends Model
{
    /**
     * @var string
     */
    public $accountName;

    /**
     * @example 2023-01-01 12:00:00
     *
     * @var string
     */
    public $authTime;
    protected $_name = [
        'accountName' => 'AccountName',
        'authTime'    => 'AuthTime',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return authAccounts
     */
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
