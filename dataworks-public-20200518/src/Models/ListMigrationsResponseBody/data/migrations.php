<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListMigrationsResponseBody\data;

use AlibabaCloud\Tea\Model;

class migrations extends Model
{
    /**
     * @example 123124123123123
     *
     * @var int
     */
    public $createTime;

    /**
     * @example 123123****
     *
     * @var string
     */
    public $createUser;

    /**
     * @example 3h1_test
     *
     * @var string
     */
    public $createUserName;

    /**
     * @var string
     */
    public $description;

    /**
     * @example http://geoip-sdk-user.oss-cn-zhangjiakou.aliyuncs.com/product/v1/ipv4/trace/v1.20220424123842.dex?Expires=1650780849&OSSAccessKeyId=XXXXXXeF4Lv5j&Signature=qxxxxx
     *
     * @var string
     */
    public $downloadUrl;

    /**
     * @example 436064
     *
     * @var int
     */
    public $id;

    /**
     * @example An internal system error occurred. datasource kafka region is not cn-chengdu, can\"t open network for it
     *
     * @var string
     */
    public $message;

    /**
     * @example EXPORT
     *
     * @var string
     */
    public $migrationType;

    /**
     * @example test_task_1638498642279
     *
     * @var string
     */
    public $name;

    /**
     * @example DATAWORKS_MODEL
     *
     * @var string
     */
    public $packageType;

    /**
     * @example 72132
     *
     * @var int
     */
    public $projectId;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $status;

    /**
     * @example 16307
     *
     * @var int
     */
    public $tenantId;

    /**
     * @example 123123123123123
     *
     * @var int
     */
    public $updateTime;

    /**
     * @example 1231****
     *
     * @var string
     */
    public $updateUser;

    /**
     * @example 3h1_test
     *
     * @var string
     */
    public $updateUserName;
    protected $_name = [
        'createTime'     => 'CreateTime',
        'createUser'     => 'CreateUser',
        'createUserName' => 'CreateUserName',
        'description'    => 'Description',
        'downloadUrl'    => 'DownloadUrl',
        'id'             => 'Id',
        'message'        => 'Message',
        'migrationType'  => 'MigrationType',
        'name'           => 'Name',
        'packageType'    => 'PackageType',
        'projectId'      => 'ProjectId',
        'status'         => 'Status',
        'tenantId'       => 'TenantId',
        'updateTime'     => 'UpdateTime',
        'updateUser'     => 'UpdateUser',
        'updateUserName' => 'UpdateUserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createUser) {
            $res['CreateUser'] = $this->createUser;
        }
        if (null !== $this->createUserName) {
            $res['CreateUserName'] = $this->createUserName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->migrationType) {
            $res['MigrationType'] = $this->migrationType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->packageType) {
            $res['PackageType'] = $this->packageType;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->updateUser) {
            $res['UpdateUser'] = $this->updateUser;
        }
        if (null !== $this->updateUserName) {
            $res['UpdateUserName'] = $this->updateUserName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return migrations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateUser'])) {
            $model->createUser = $map['CreateUser'];
        }
        if (isset($map['CreateUserName'])) {
            $model->createUserName = $map['CreateUserName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['MigrationType'])) {
            $model->migrationType = $map['MigrationType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PackageType'])) {
            $model->packageType = $map['PackageType'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['UpdateUser'])) {
            $model->updateUser = $map['UpdateUser'];
        }
        if (isset($map['UpdateUserName'])) {
            $model->updateUserName = $map['UpdateUserName'];
        }

        return $model;
    }
}
