<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class CreateRdsPostgreSQLDataSourceRequest extends Model
{
    /**
     * @example db_name
     *
     * @var string
     */
    public $databaseName;

    /**
     * @example this is a test database
     *
     * @var string
     */
    public $description;

    /**
     * @example g_abcdefj***
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example data_name
     *
     * @var string
     */
    public $name;

    /**
     * @example pass_word
     *
     * @var string
     */
    public $password;

    /**
     * @example user_name
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'databaseName' => 'DatabaseName',
        'description'  => 'Description',
        'instanceId'   => 'InstanceId',
        'name'         => 'Name',
        'password'     => 'Password',
        'userName'     => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
     * @return CreateRdsPostgreSQLDataSourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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
