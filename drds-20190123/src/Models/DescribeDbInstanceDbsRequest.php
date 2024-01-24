<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class DescribeDbInstanceDbsRequest extends Model
{
    /**
     * @description The name of the privileged account of the PolarDB-X 1.0 instance. You do not need to specify this parameter if you have no privileged account.
     *
     * @example test
     *
     * @var string
     */
    public $accountName;

    /**
     * @description The engine type of the storage-layer databases. Valid values: **POLARDB** and **RDS**.
     *
     * @example POLARDB
     *
     * @var string
     */
    public $dbInstType;

    /**
     * @description The ID of the instance in which the storage-layer databases are deployed.
     *
     * @example pc-****************
     *
     * @var string
     */
    public $dbInstanceId;

    /**
     * @description The ID of the PolarDB-X 1.0 instance.
     *
     * @example drds************
     *
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @description The password of the privileged account. You do not need to specify this parameter if you have no privileged account.
     *
     * @example pwd_111111
     *
     * @var string
     */
    public $password;
    protected $_name = [
        'accountName'    => 'AccountName',
        'dbInstType'     => 'DbInstType',
        'dbInstanceId'   => 'DbInstanceId',
        'drdsInstanceId' => 'DrdsInstanceId',
        'password'       => 'Password',
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
        if (null !== $this->dbInstType) {
            $res['DbInstType'] = $this->dbInstType;
        }
        if (null !== $this->dbInstanceId) {
            $res['DbInstanceId'] = $this->dbInstanceId;
        }
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDbInstanceDbsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['DbInstType'])) {
            $model->dbInstType = $map['DbInstType'];
        }
        if (isset($map['DbInstanceId'])) {
            $model->dbInstanceId = $map['DbInstanceId'];
        }
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }

        return $model;
    }
}
