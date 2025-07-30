<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDeploymentPackageFilesResponseBody\pagingInfo;

use AlibabaCloud\Tea\Model;

class deploymentPackageFiles extends Model
{
    /**
     * @description The change type, which is an integer. Valid values:
     *
     *   0: addition
     *   1: update
     *   2: deletion
     *
     * @example 0
     *
     * @var int
     */
    public $changeType;

    /**
     * @description The comment for committing.
     *
     * @var string
     */
    public $comment;

    /**
     * @description The time for committing.
     *
     * @example 2025-04-10 15:55:47
     *
     * @var string
     */
    public $commitTime;

    /**
     * @description The ID of the Alibaba Cloud account used by the user who committed the file.
     *
     * @example 446***
     *
     * @var string
     */
    public $commitUser;

    /**
     * @description The name of the Alibaba Cloud account used by the user who committed the file.
     *
     * @example user***
     *
     * @var string
     */
    public $commitUserName;

    /**
     * @description The file ID.
     *
     * @example 520246913
     *
     * @var int
     */
    public $fileId;

    /**
     * @description The name of the file of the current version.
     *
     * @example bak_part_basc_person_relation_all_da
     *
     * @var string
     */
    public $fileName;

    /**
     * @description The file type. The code for files varies based on the file type. For more information, see [DataWorks nodes](https://help.aliyun.com/document_detail/600169.html).
     *
     * @example 13
     *
     * @var int
     */
    public $fileType;

    /**
     * @description The file version.
     *
     * @example 34
     *
     * @var int
     */
    public $fileVersion;

    /**
     * @description The unique ID.
     *
     * @example 650433503
     *
     * @var int
     */
    public $id;

    /**
     * @description Indicates whether the version is a version in the production environment of the scheduling system.
     *
     * @example true
     *
     * @var bool
     */
    public $isSameAsProductionVersion;

    /**
     * @description The scheduling property configurations of the node that corresponds to the file, which is a JSON string.
     *
     * @example {
     * "tagList": [],
     * "fileId": -1,
     * "taskRerunTime": 0,
     * "taskRerunInterval": 0,
     * "reRunAble": 1,
     * "nodeId": 125803000,
     * "nodeName": "new",
     * "nodeType": 0,
     * "isStop": 0,
     * "paraValue": "",
     * "startEffectDate": "1970-01-01 00:00:00",
     * "endEffectDate": "9999-01-01 00:00:00",
     * "cronExpress": "00 26 00 * * ?",
     * "owner": "1107550004250000",
     * "resgroupId": 6300000,
     * "cu": "0.25",
     * "appId": 170000,
     * "tenantId": 524257424560000,
     * "createTime": "2025-04-10 15:55:01",
     * "createUser": "1107550004250000",
     * "lastModifyTime": "2025-04-10 15:55:41",
     * "cycleType": 0,
     * "dependentType": 0,
     * "dependentTypeList": [0],
     * "lastModifyUser": "1107550004250000",
     * "dependentDataNode": "",
     * "input": "[{\\"regionId\\":\\"cn-hangzhou\\",\\"str\\":\\"root_input\\",\\"parseType\\":1}]",
     * "output": "[{\\"str\\":\\"project_root.526586287_out\\",\\"parseType\\":2},{\\"str\\":\\"project_root.new\\",\\"parseType\\":1}]",
     * "inputList": [{
     * "regionId": "cn-hangzhou",
     * "str": "root_input",
     * "parseType": 1
     * }],
     * "outputList": [{
     * "str": "project_root.526586287_out",
     * "parseType": 2
     * }, {
     * "str": "project_root.new",
     * "parseType": 1
     * }],
     * "isAutoParse": 1,
     * "startRightNow": false,
     * "extConfig": "{\\"openCustomCron\\":false,\\"formCron\\":\\"\\"}",
     * "inputContextList": [],
     * "outputContextList": []
     * }
     *
     * @var string
     */
    public $nodeConfiguration;

    /**
     * @description The ID of the auto triggered node that corresponds to the file.
     *
     * @example 700005008419
     *
     * @var int
     */
    public $nodeId;

    /**
     * @description The workspace ID.
     *
     * @example 27595
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The test status in the development environment.
     *
     * @var string
     */
    public $smokeTestStatus;

    /**
     * @description The status of the code file of the current version. Valid values:
     *
     *   2: Commit check in progress.
     *   3: Commit check passed.
     *   4: Commit check failed.
     *   10: Committing.
     *   11: Committed.
     *   20: Approved.
     *   21: Rejected.
     *   22: Warning detected during checking.
     *   23: Under code review.
     *   24: Code review rejected.
     *   80: Deployment package created.
     *   100: Deploying.
     *   101: Deployed to the production environment.
     *   200: Cancelled.
     *
     * @example 100
     *
     * @var int
     */
    public $status;

    /**
     * @description The DataWorks tenant ID.
     *
     * @example 639415964191360
     *
     * @var int
     */
    public $tenantId;

    /**
     * @description The module to which the file belongs. Valid values:
     *
     *   NORMAL: The file is used for DataStudio.
     *   MANUAL: The file is used for a manually triggered node.
     *   MANUAL_BIZ: The file is used for a manually triggered workflow.
     *   SKIP: The file is used for a dry-run node in DataStudio.
     *   ADHOCQUERY: The file is used for an ad hoc query.
     *   COMPONENT: The file is used for a script template.
     *
     * @example NORMAL
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return deploymentPackageFiles
     */
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
