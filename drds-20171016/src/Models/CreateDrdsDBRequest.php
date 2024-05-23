<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20171016\Models;

use AlibabaCloud\Tea\Model;

class CreateDrdsDBRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example test123
     *
     * @var string
     */
    public $dbName;

    /**
     * @description This parameter is required.
     *
     * @example drdssen12****
     *
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @description This parameter is required.
     *
     * @example utf8
     *
     * @var string
     */
    public $encode;

    /**
     * @description This parameter is required.
     *
     * @example *********
     *
     * @var string
     */
    public $password;

    /**
     * @description This parameter is required.
     *
     * @example [“rdsId1”, “rdsId2”]
     *
     * @var string
     */
    public $rdsInstances;
    protected $_name = [
        'dbName'         => 'DbName',
        'drdsInstanceId' => 'DrdsInstanceId',
        'encode'         => 'Encode',
        'password'       => 'Password',
        'rdsInstances'   => 'RdsInstances',
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
        if (null !== $this->encode) {
            $res['Encode'] = $this->encode;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->rdsInstances) {
            $res['RdsInstances'] = $this->rdsInstances;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDrdsDBRequest
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
        if (isset($map['Encode'])) {
            $model->encode = $map['Encode'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['RdsInstances'])) {
            $model->rdsInstances = $map['RdsInstances'];
        }

        return $model;
    }
}
