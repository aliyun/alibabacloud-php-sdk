<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models;

use AlibabaCloud\Tea\Model;

class CreateAccountShrinkRequest extends Model
{
    /**
     * @description The name of the account.
     *
     * This parameter is required.
     *
     * @example test1
     *
     * @var string
     */
    public $account;

    /**
     * @description The type of the database account. Valid values:
     *
     *   **NormalAccount**: standard account
     *   **SuperAccount**: privileged account
     *
     * This parameter is required.
     *
     * @example NormalAccount
     *
     * @var string
     */
    public $accountType;

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
     * @description The description of the account.
     *
     * @example Used for account
     *
     * @var string
     */
    public $description;

    /**
     * @description The information about permissions.
     *
     * @var string
     */
    public $dmlAuthSettingShrink;

    /**
     * @description The password of the database account. The password must meet the following requirements:
     *
     * - The password must contain at least three of the following character types: uppercase letters, lowercase letters, digits, and special characters.
     * - The following special characters are supported: ! @ # $ % ^ & * ( ) _ + - =
     * - The password must be 8 to 32 characters in length.
     *
     * This parameter is required.
     *
     * @example a1b2c3d4@
     *
     * @var string
     */
    public $password;

    /**
     * @description The code of the cloud service.
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
        'accountType' => 'AccountType',
        'DBInstanceId' => 'DBInstanceId',
        'description' => 'Description',
        'dmlAuthSettingShrink' => 'DmlAuthSetting',
        'password' => 'Password',
        'product' => 'Product',
        'regionId' => 'RegionId',
    ];

    public function validate(): void {}

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

    /**
     * @param array $map
     *
     * @return CreateAccountShrinkRequest
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
