<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiPlugin\V20220112\Models\GetUserResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 账号状态。
     * - 2 : 已释放产品。
     * @example 0
     *
     * @var int
     */
    public $accountStatus;
    protected $_name = [
        'accountStatus' => 'AccountStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountStatus) {
            $res['AccountStatus'] = $this->accountStatus;
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
        if (isset($map['AccountStatus'])) {
            $model->accountStatus = $map['AccountStatus'];
        }

        return $model;
    }
}
