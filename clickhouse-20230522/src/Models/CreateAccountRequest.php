<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models;

use AlibabaCloud\SDK\Clickhouse\V20230522\Models\CreateAccountRequest\dmlAuthSetting;
use AlibabaCloud\Tea\Model;

class CreateAccountRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example test1
     *
     * @var string
     */
    public $account;

    /**
     * @description This parameter is required.
     *
     * @example NormalAccount
     *
     * @var string
     */
    public $accountType;

    /**
     * @description This parameter is required.
     *
     * @example cc-bp100p4q1g9z3****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var dmlAuthSetting
     */
    public $dmlAuthSetting;

    /**
     * @description This parameter is required.
     *
     * @example a1b2c3d4@
     *
     * @var string
     */
    public $password;

    /**
     * @example clickhouse
     *
     * @var string
     */
    public $product;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'account'        => 'Account',
        'accountType'    => 'AccountType',
        'DBInstanceId'   => 'DBInstanceId',
        'description'    => 'Description',
        'dmlAuthSetting' => 'DmlAuthSetting',
        'password'       => 'Password',
        'product'        => 'Product',
        'regionId'       => 'RegionId',
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
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->dmlAuthSetting) {
            $res['DmlAuthSetting'] = null !== $this->dmlAuthSetting ? $this->dmlAuthSetting->toMap() : null;
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
     * @return CreateAccountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Account'])) {
            $model->account = $map['Account'];
        }
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DmlAuthSetting'])) {
            $model->dmlAuthSetting = dmlAuthSetting::fromMap($map['DmlAuthSetting']);
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
