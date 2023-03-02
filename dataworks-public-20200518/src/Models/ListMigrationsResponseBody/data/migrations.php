<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListMigrationsResponseBody\data;

use AlibabaCloud\Tea\Model;

class migrations extends Model
{
    /**
     * @description The time when the migration task was created.
     *
     * @example 123124123123123
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The ID of the user who created the migration task.
     *
     * @example 123123****
     *
     * @var string
     */
    public $createUser;

    /**
     * @description The name of the user who created the migration task.
     *
     * @example 3h1_test
     *
     * @var string
     */
    public $createUserName;

    /**
     * @description The description of the export task.
     *
     * @var string
     */
    public $description;

    /**
     * @description The URL that is used to download the package of the export task. You can use the URL to download the package of the export task.
     *
     * @example http://geoip-sdk-user.oss-cn-zhangjiakou.aliyuncs.com/product/v1/ipv4/trace/v1.20220424123842.dex?Expires=1650780849&OSSAccessKeyId=XXXXXXeF4Lv5j&Signature=qxxxxx
     *
     * @var string
     */
    public $downloadUrl;

    /**
     * @description The ID of the primary key.
     *
     * @example 436064
     *
     * @var int
     */
    public $id;

    /**
     * @description The error message returned.
     *
     * @example An internal system error occurred. datasource kafka region is not cn-chengdu, can\"t open network for it
     *
     * @var string
     */
    public $message;

    /**
     * @description The type of the migration task.
     *
     *   IMPORT
     *   EXPORT
     *
     * @example EXPORT
     *
     * @var string
     */
    public $migrationType;

    /**
     * @description The name of the migration task.
     *
     * @example test_task_1638498642279
     *
     * @var string
     */
    public $name;

    /**
     * @description The type of the import or export package. Valid values:
     *
     *   DWMA (standard format)
     *   DATAWORKS_MODEL (standard format)
     *   DATAWORKS_V2 (Apsara Stack DataWorks V3.6.1 to V3.11)
     *   DATAWORKS_V3 (Apsara Stack DataWorks V3.12 and later)
     *
     * The DWMA and DATAWORKS_MODEL types are interchangeable.
     * @example DATAWORKS_MODEL
     *
     * @var string
     */
    public $packageType;

    /**
     * @description The ID of the DataWorks workspace to which the task belongs.
     *
     * @example 72132
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The status of the migration task. Valid values:
     *
     *   INIT: The migration task is in the initial state.
     *   EDITING: The migration task is being edited.
     *   RUNNING: The migration task is running.
     *   FAILURE: The migration task fails to run.
     *   SUCCESS: The migration task is successfully run.
     *
     * @example SUCCESS
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the tenant.
     *
     * @example 16307
     *
     * @var int
     */
    public $tenantId;

    /**
     * @description The time when the migration task was last updated.
     *
     * @example 123123123123123
     *
     * @var int
     */
    public $updateTime;

    /**
     * @description The ID of the user who last updated the migration task.
     *
     * @example 1231****
     *
     * @var string
     */
    public $updateUser;

    /**
     * @description The name of the user who last updated the migration task.
     *
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
