<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20171016\Models;

use AlibabaCloud\Tea\Model;

class CreateDrdsAccountRequest extends Model
{
    /**
     * @example testdb
     *
     * @var string
     */
    public $dbName;

    /**
     * @description This parameter is required.
     *
     * @example drdsusrzimk2****
     *
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @example Test!123
     *
     * @var string
     */
    public $password;

    /**
     * @description This parameter is required.
     *
     * @example testaccount
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'dbName'         => 'DbName',
        'drdsInstanceId' => 'DrdsInstanceId',
        'password'       => 'Password',
        'userName'       => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDrdsAccountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
