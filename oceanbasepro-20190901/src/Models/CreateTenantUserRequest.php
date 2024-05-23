<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class CreateTenantUserRequest extends Model
{
    /**
     * @description The description of the database.
     *
     * @example this is a test database
     *
     * @var string
     */
    public $description;

    /**
     * @description 加密方式。
     *
     * @example RAS
     *
     * @var string
     */
    public $encryptionType;

    /**
     * @description The ID of the OceanBase cluster.
     *
     * This parameter is required.
     * @example ob317v4uif****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The role of the user account.  In Oracle mode, this parameter unspecified is left unspecified.  In MySQL mode, the super administrator account has ALL PRIVILEGES, and you can leave this parameter unspecified.  You need to specify the account information for a general user account. By default, the account information is a JSON array that contains the information of the role and the schema (Oracle mode) or database (MySQL mode).  Valid values: ReadWrite: a role that has the read and write privileges, namely ALL PRIVILEGES. ReadOnly: a role that has only the read-only privilege SELECT. DDL: a role that has DDL privileges such as CREATE, DROP, ALTER, SHOW VIEW, and CREATE VIEW. DML: a role that has DML privileges such as SELECT, INSERT, UPDATE, DELETE, and SHOW VIEW.
     *
     * @example [{"Database":"oceanbase1","Role":"readwrite"},{"Database":"oceanbase2","Role":"readonly"}]
     *
     * @var string
     */
    public $roles;

    /**
     * @description The ID of the tenant.
     *
     * This parameter is required.
     * @example ob2mr3oae0****
     *
     * @var string
     */
    public $tenantId;

    /**
     * @description The name of the database account.  You cannot use reserved keywords, such as SYS and root.
     *
     * This parameter is required.
     * @example pay_test
     *
     * @var string
     */
    public $userName;

    /**
     * @description The password of the database account.  It must be 10 to 32 characters in length and contain three types of the following characters: uppercase letters, lowercase letters, digits, and special characters. The special characters are ! @ # $ % \\ ^ \\ & \\ * ( ) _ + - =
     *
     * This parameter is required.
     * @example !Aliyun4Oceanbase
     *
     * @var string
     */
    public $userPassword;

    /**
     * @description The type of the database account. Valid values: Admin: the super administrator account. Normal: a general account.
     *
     * This parameter is required.
     * @example Normal
     *
     * @var string
     */
    public $userType;
    protected $_name = [
        'description'    => 'Description',
        'encryptionType' => 'EncryptionType',
        'instanceId'     => 'InstanceId',
        'roles'          => 'Roles',
        'tenantId'       => 'TenantId',
        'userName'       => 'UserName',
        'userPassword'   => 'UserPassword',
        'userType'       => 'UserType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->encryptionType) {
            $res['EncryptionType'] = $this->encryptionType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->roles) {
            $res['Roles'] = $this->roles;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->userPassword) {
            $res['UserPassword'] = $this->userPassword;
        }
        if (null !== $this->userType) {
            $res['UserType'] = $this->userType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTenantUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EncryptionType'])) {
            $model->encryptionType = $map['EncryptionType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Roles'])) {
            $model->roles = $map['Roles'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['UserPassword'])) {
            $model->userPassword = $map['UserPassword'];
        }
        if (isset($map['UserType'])) {
            $model->userType = $map['UserType'];
        }

        return $model;
    }
}
