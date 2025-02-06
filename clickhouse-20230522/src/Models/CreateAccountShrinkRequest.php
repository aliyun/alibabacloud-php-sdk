<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models;

use AlibabaCloud\Dara\Model;

class CreateAccountShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $account;
    /**
     * @var string
     */
    public $accountType;
    /**
     * @var string
     */
    public $DBInstanceId;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $dmlAuthSettingShrink;
    /**
     * @var string
     */
    public $password;
    /**
     * @var string
     */
    public $product;
    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'account'              => 'Account',
        'accountType'          => 'AccountType',
        'DBInstanceId'         => 'DBInstanceId',
        'description'          => 'Description',
        'dmlAuthSettingShrink' => 'DmlAuthSetting',
        'password'             => 'Password',
        'product'              => 'Product',
        'regionId'             => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->dmlAuthSettingShrink) {
            $res['DmlAuthSetting'] = $this->dmlAuthSettingShrink;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
            $model->dmlAuthSettingShrink = $map['DmlAuthSetting'];
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
