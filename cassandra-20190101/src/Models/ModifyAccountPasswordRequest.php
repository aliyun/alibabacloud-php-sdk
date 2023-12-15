<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cassandra\V20190101\Models;

use AlibabaCloud\Tea\Model;

class ModifyAccountPasswordRequest extends Model
{
    /**
     * @example cassandra_test
     *
     * @var string
     */
    public $account;

    /**
     * @example cds-bp1l5ys6****wzrx
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example Alibaba@#￥**
     *
     * @var string
     */
    public $password;
    protected $_name = [
        'account'   => 'Account',
        'clusterId' => 'ClusterId',
        'password'  => 'Password',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->account) {
            $res['Account'] = $this->account;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyAccountPasswordRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Account'])) {
            $model->account = $map['Account'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }

        return $model;
    }
}
