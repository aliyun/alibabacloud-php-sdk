<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\GetUserDeviceResponseBody\device;

use AlibabaCloud\Tea\Model;

class historyUsers extends Model
{
    /**
     * @example su_e8f218fb171edd167c2ad917d21f53148bdefc510ca1f3c3cc0249d3643d****
     *
     * @var string
     */
    public $saseUserId;

    /**
     * @var string
     */
    public $username;
    protected $_name = [
        'saseUserId' => 'SaseUserId',
        'username'   => 'Username',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->saseUserId) {
            $res['SaseUserId'] = $this->saseUserId;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return historyUsers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SaseUserId'])) {
            $model->saseUserId = $map['SaseUserId'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}
