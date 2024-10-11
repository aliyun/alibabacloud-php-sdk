<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20220101\Models;

use AlibabaCloud\Tea\Model;

class CreateAccountRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example test
     *
     * @var string
     */
    public $account;

    /**
     * @example test
     *
     * @var string
     */
    public $comment;

    /**
     * @description This parameter is required.
     *
     * @example cc-8vbsom12x476u****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @example 123456Aa
     *
     * @var string
     */
    public $password;

    /**
     * @example b17e1e0450dac425ea318253f6f852972d69731d6c7499c001468b695b6da219
     *
     * @var string
     */
    public $passwordSha256Hex;

    /**
     * @description This parameter is required.
     *
     * @example Normal
     *
     * @var string
     */
    public $privilegeType;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'account'           => 'Account',
        'comment'           => 'Comment',
        'DBClusterId'       => 'DBClusterId',
        'password'          => 'Password',
        'passwordSha256Hex' => 'PasswordSha256Hex',
        'privilegeType'     => 'PrivilegeType',
        'regionId'          => 'RegionId',
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
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->passwordSha256Hex) {
            $res['PasswordSha256Hex'] = $this->passwordSha256Hex;
        }
        if (null !== $this->privilegeType) {
            $res['PrivilegeType'] = $this->privilegeType;
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
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['PasswordSha256Hex'])) {
            $model->passwordSha256Hex = $map['PasswordSha256Hex'];
        }
        if (isset($map['PrivilegeType'])) {
            $model->privilegeType = $map['PrivilegeType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
