<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Tea\Model;

class ModifyDatabaseAccountRequest extends Model
{
    /**
     * @description The ID of the database account to modify.
     *
     * >  You can call the [ListDatabaseAccounts](https://help.aliyun.com/document_detail/2758839.html) operation to query the database account ID.
     *
     * This parameter is required.
     *
     * @example 2
     *
     * @var string
     */
    public $databaseAccountId;

    /**
     * @description The new username of the database account. The username can be up to 128 characters in length.
     *
     * @example aaa
     *
     * @var string
     */
    public $databaseAccountName;

    /**
     * @description The new name of the database. This parameter is required if the database engine is PostgreSQL or Oracle.
     *
     * @example orcl
     *
     * @var string
     */
    public $databaseSchema;

    /**
     * @description The ID of the bastion host that manages the database account to modify.
     *
     * > You can call the [DescribeInstances](https://help.aliyun.com/document_detail/153281.html) operation to query the bastion host ID.
     *
     * This parameter is required.
     *
     * @example bastionhost-cn-zpr2zyqx603
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The new password of the database account.
     *
     * @example 14SZ!******
     *
     * @var string
     */
    public $password;

    /**
     * @description The region ID of the bastion host that manages the database account to modify.
     *
     * >  For more information about the mapping between region IDs and region names, see [Regions and zones](https://help.aliyun.com/document_detail/40654.html).
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'databaseAccountId' => 'DatabaseAccountId',
        'databaseAccountName' => 'DatabaseAccountName',
        'databaseSchema' => 'DatabaseSchema',
        'instanceId' => 'InstanceId',
        'password' => 'Password',
        'regionId' => 'RegionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->databaseAccountId) {
            $res['DatabaseAccountId'] = $this->databaseAccountId;
        }
        if (null !== $this->databaseAccountName) {
            $res['DatabaseAccountName'] = $this->databaseAccountName;
        }
        if (null !== $this->databaseSchema) {
            $res['DatabaseSchema'] = $this->databaseSchema;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
     * @return ModifyDatabaseAccountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatabaseAccountId'])) {
            $model->databaseAccountId = $map['DatabaseAccountId'];
        }
        if (isset($map['DatabaseAccountName'])) {
            $model->databaseAccountName = $map['DatabaseAccountName'];
        }
        if (isset($map['DatabaseSchema'])) {
            $model->databaseSchema = $map['DatabaseSchema'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
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
