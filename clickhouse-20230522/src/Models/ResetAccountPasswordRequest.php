<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models;

use AlibabaCloud\Tea\Model;

class ResetAccountPasswordRequest extends Model
{
    /**
     * @description The name of the database account.
     *
     * This parameter is required.
     *
     * @example test1
     *
     * @var string
     */
    public $account;

    /**
     * @description The cluster ID.
     *
     * This parameter is required.
     *
     * @example cc-bp100p4q1g9z3****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The password of the database account. The password must meet the following requirements:
     *
     * - The password must contain at least three of the following character types: uppercase letters, lowercase letters, digits, and special characters.
     * - The following special characters are supported: ! @ # $ % ^ & * ( ) _ + - =
     * - The password must be 8 to 32 characters in length.
     *
     * This parameter is required.
     *
     * @example 123456Aa
     *
     * @var string
     */
    public $password;

    /**
     * @description The service name.
     *
     * @example clickhouse
     *
     * @var string
     */
    public $product;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'account' => 'Account',
        'DBInstanceId' => 'DBInstanceId',
        'password' => 'Password',
        'product' => 'Product',
        'regionId' => 'RegionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->account) {
            $res['Account'] = $this->account;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResetAccountPasswordRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Account'])) {
            $model->account = $map['Account'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
