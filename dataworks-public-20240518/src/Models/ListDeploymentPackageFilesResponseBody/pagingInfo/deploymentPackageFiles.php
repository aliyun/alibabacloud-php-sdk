<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDeploymentPackageFilesResponseBody\pagingInfo;

use AlibabaCloud\Dara\Model;

class deploymentPackageFiles extends Model
{
    /**
     * @var int
     */
    public $changeType;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $commitTime;

    /**
     * @var string
     */
    public $commitUser;

    /**
     * @var string
     */
    public $commitUserName;

    /**
     * @var int
     */
    public $fileId;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var int
     */
    public $fileType;

    /**
     * @var int
     */
    public $fileVersion;

    /**
     * @var int
     */
    public $id;

    /**
     * @var bool
     */
    public $isSameAsProductionVersion;

    /**
     * @var string
     */
    public $nodeConfiguration;

    /**
     * @var int
     */
    public $nodeId;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $smokeTestStatus;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $tenantId;

    /**
     * @var string
     */
    public $useType;
    protected $_name = [
        'changeType' => 'ChangeType',
        'comment' => 'Comment',
        'commitTime' => 'CommitTime',
        'commitUser' => 'CommitUser',
        'commitUserName' => 'CommitUserName',
        'fileId' => 'FileId',
        'fileName' => 'FileName',
        'fileType' => 'FileType',
        'fileVersion' => 'FileVersion',
        'id' => 'Id',
        'isSameAsProductionVersion' => 'IsSameAsProductionVersion',
        'nodeConfiguration' => 'NodeConfiguration',
        'nodeId' => 'NodeId',
        'projectId' => 'ProjectId',
        'smokeTestStatus' => 'SmokeTestStatus',
        'status' => 'Status',
        'tenantId' => 'TenantId',
        'useType' => 'UseType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->changeType) {
            $res['ChangeType'] = $this->changeType;
        }

        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->commitTime) {
            $res['CommitTime'] = $this->commitTime;
        }

        if (null !== $this->commitUser) {
            $res['CommitUser'] = $this->commitUser;
        }

        if (null !== $this->commitUserName) {
            $res['CommitUserName'] = $this->commitUserName;
        }

        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }

        if (null !== $this->fileVersion) {
            $res['FileVersion'] = $this->fileVersion;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->isSameAsProductionVersion) {
            $res['IsSameAsProductionVersion'] = $this->isSameAsProductionVersion;
        }

        if (null !== $this->nodeConfiguration) {
            $res['NodeConfiguration'] = $this->nodeConfiguration;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->smokeTestStatus) {
            $res['SmokeTestStatus'] = $this->smokeTestStatus;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        if (null !== $this->useType) {
            $res['UseType'] = $this->useType;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChangeType'])) {
            $model->changeType = $map['ChangeType'];
        }

        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['CommitTime'])) {
            $model->commitTime = $map['CommitTime'];
        }

        if (isset($map['CommitUser'])) {
            $model->commitUser = $map['CommitUser'];
        }

        if (isset($map['CommitUserName'])) {
            $model->commitUserName = $map['CommitUserName'];
        }

        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }

        if (isset($map['FileVersion'])) {
            $model->fileVersion = $map['FileVersion'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['IsSameAsProductionVersion'])) {
            $model->isSameAsProductionVersion = $map['IsSameAsProductionVersion'];
        }

        if (isset($map['NodeConfiguration'])) {
            $model->nodeConfiguration = $map['NodeConfiguration'];
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['SmokeTestStatus'])) {
            $model->smokeTestStatus = $map['SmokeTestStatus'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        if (isset($map['UseType'])) {
            $model->useType = $map['UseType'];
        }

        return $model;
    }
}
