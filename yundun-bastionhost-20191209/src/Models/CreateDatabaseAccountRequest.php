<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Tea\Model;

class CreateDatabaseAccountRequest extends Model
{
    /**
     * @description The username of the database account to be created. The username can be up to 128 characters in length.
     *
     * This parameter is required.
     * @example root
     *
     * @var string
     */
    public $databaseAccountName;

    /**
     * @description The ID of the database for which you want to create a database account.
     *
     * This parameter is required.
     * @example 3
     *
     * @var string
     */
    public $databaseId;

    /**
     * @description The name of the database. This parameter is required for PostgreSQL and Oracle databases.
     *
     * @example orcl
     *
     * @var string
     */
    public $databaseSchema;

    /**
     * @description The ID of the bastion host for which you want to create a database account.
     *
     * This parameter is required.
     * @example bastionhost-cn-5yd34ol020a
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The logon attribute. This parameter is required for Oracle databases. Valid values:
     *
     *   SERVICENAME
     *   SID
     *
     * @example SID
     *
     * @var string
     */
    public $loginAttribute;

    /**
     * @description The password of the database account to be created.
     *
     * @example MCQ******
     *
     * @var string
     */
    public $password;

    /**
     * @description The region ID of the bastion host for which you want to create a database account.
     *
     * > For more information about the mapping between region IDs and region names, see [Regions and zones](https://help.aliyun.com/document_detail/40654.html).
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'databaseAccountName' => 'DatabaseAccountName',
        'databaseId'          => 'DatabaseId',
        'databaseSchema'      => 'DatabaseSchema',
        'instanceId'          => 'InstanceId',
        'loginAttribute'      => 'LoginAttribute',
        'password'            => 'Password',
        'regionId'            => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->databaseAccountName) {
            $res['DatabaseAccountName'] = $this->databaseAccountName;
        }
        if (null !== $this->databaseId) {
            $res['DatabaseId'] = $this->databaseId;
        }
        if (null !== $this->databaseSchema) {
            $res['DatabaseSchema'] = $this->databaseSchema;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->loginAttribute) {
            $res['LoginAttribute'] = $this->loginAttribute;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDatabaseAccountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatabaseAccountName'])) {
            $model->databaseAccountName = $map['DatabaseAccountName'];
        }
        if (isset($map['DatabaseId'])) {
            $model->databaseId = $map['DatabaseId'];
        }
        if (isset($map['DatabaseSchema'])) {
            $model->databaseSchema = $map['DatabaseSchema'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['LoginAttribute'])) {
            $model->loginAttribute = $map['LoginAttribute'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
