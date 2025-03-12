<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class CreateSecretRequest extends Model
{
    /**
     * @description The instance ID.
     *
     * >  You can call the [DescribeDBInstances](https://help.aliyun.com/document_detail/86911.html) operation to query the information about all AnalyticDB for PostgreSQL instances within a region, including instance IDs.
     * @example gp-xxxxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The description of the access credential.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The password of the database account that is used to access the instance.
     *
     * This parameter is required.
     * @example pwd123
     *
     * @var string
     */
    public $password;

    /**
     * @description The region ID of the instance.
     *
     * This parameter is required.
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the access credential. The name must be 1 to 16 characters in length and can contain letters, digits, and underscores (_). If you leave this parameter empty, the value of the Username parameter is used.
     *
     * @example testsecret
     *
     * @var string
     */
    public $secretName;

    /**
     * @description Specifies whether to check the connectivity to the instance by using the name and password of the database account.
     *
     * @example true
     *
     * @var bool
     */
    public $testConnection;

    /**
     * @description The name of the database account that is used to access the instance.
     *
     * This parameter is required.
     * @example testacc
     *
     * @var string
     */
    public $username;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'DBInstanceId'   => 'DBInstanceId',
        'description'    => 'Description',
        'ownerId'        => 'OwnerId',
        'password'       => 'Password',
        'regionId'       => 'RegionId',
        'secretName'     => 'SecretName',
        'testConnection' => 'TestConnection',
        'username'       => 'Username',
        'workspaceId'    => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->secretName) {
            $res['SecretName'] = $this->secretName;
        }
        if (null !== $this->testConnection) {
            $res['TestConnection'] = $this->testConnection;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSecretRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SecretName'])) {
            $model->secretName = $map['SecretName'];
        }
        if (isset($map['TestConnection'])) {
            $model->testConnection = $map['TestConnection'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
