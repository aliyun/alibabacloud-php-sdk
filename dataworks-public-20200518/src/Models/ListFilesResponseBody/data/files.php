<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListFilesResponseBody\data;

use AlibabaCloud\Tea\Model;

class files extends Model
{
    /**
     * @description Specifies whether the automatic parsing feature is enabled for the file. Valid values:
     *
     *   true: The automatic parsing feature is enabled for the file.
     *   false: The automatic parsing feature is not enabled for the file.
     *
     * This parameter is equivalent to the Analyze Code parameter in the Dependencies section of the Properties panel in the [DataWorks console](https://workbench.data.aliyun.com/console).
     * @example true
     *
     * @var bool
     */
    public $autoParsing;

    /**
     * @description The ID of the workflow to which the file belongs. This parameter is deprecated and replaced by the BusinessId parameter.
     *
     * @example 300000
     *
     * @var int
     */
    public $bizId;

    /**
     * @description The ID of the workflow to which the file belongs.
     *
     * @example 300000
     *
     * @var int
     */
    public $businessId;

    /**
     * @description Indicates whether the latest code in the file is committed. Valid values: 0 and 1. The value 0 indicates that the latest code in the file is not committed. The value 1 indicates that the latest code in the file is committed.
     *
     * @example 1
     *
     * @var int
     */
    public $commitStatus;

    /**
     * @description The ID of the compute engine instance that is used to run the node that corresponds to the file.
     *
     * @example odps_first
     *
     * @var string
     */
    public $connectionName;

    /**
     * @description This parameter is deprecated. You can call the [GetFile](~~173954#doc-api-dataworks-public-GetFile~~) operation to query the details of the file.
     *
     * @example SHOW TABLES;
     *
     * @var string
     */
    public $content;

    /**
     * @description The time when the file was created. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1593950832000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The ID of the Alibaba Cloud account that is used to create the file.
     *
     * @example 382762****
     *
     * @var string
     */
    public $createUser;

    /**
     * @description The latest version number of the file.
     *
     * @example 2
     *
     * @var int
     */
    public $currentVersion;

    /**
     * @description The description of the file.
     *
     * @example my test datastudio file
     *
     * @var string
     */
    public $fileDescription;

    /**
     * @description The ID of the folder to which the file belongs.
     *
     * @example 2735c2****
     *
     * @var string
     */
    public $fileFolderId;

    /**
     * @description The ID of the file.
     *
     * @example 10000001
     *
     * @var int
     */
    public $fileId;

    /**
     * @description The name of the file.
     *
     * @example ods_user_info_d
     *
     * @var string
     */
    public $fileName;

    /**
     * @description The type of the code in the file. Valid values: 6 (Shell), 10 (ODPS SQL), 11 (ODPS MR), 23 (Data Integration), 24 (ODPS Script), 99 (zero load), 221 (PyODPS 2), 225 (ODPS Spark), 227 (EMR Hive), 228 (EMR Spark), 229 (EMR Spark SQL), 230 (EMR MR), 239 (OSS object inspection), 257 (EMR Shell), 258 (EMR Spark Shell), 259 (EMR Presto), 260 (EMR Impala), 900 (real-time synchronization), 1089 (cross-tenant collaboration), 1091 (Hologres development), 1093 (Hologres SQL), 1100 (assignment), and 1221 (PyODPS 3).
     *
     * @example 10
     *
     * @var int
     */
    public $fileType;

    /**
     * @description Indicates whether the file needs to be uploaded to MaxCompute if the file is a MaxCompute resource file.
     *
     * This parameter is returned only if the file is a MaxCompute resource file.
     * @example false
     *
     * @var bool
     */
    public $isMaxCompute;

    /**
     * @description The time when the file was last modified. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1593950832000
     *
     * @var int
     */
    public $lastEditTime;

    /**
     * @description The ID of the Alibaba Cloud account that is used to last modify the file.
     *
     * @example 38748246285727
     *
     * @var string
     */
    public $lastEditUser;

    /**
     * @description The ID of the auto triggered node that is generated in the scheduling system after the file is committed.
     *
     * @example 300001
     *
     * @var int
     */
    public $nodeId;

    /**
     * @description The ID of the Alibaba Cloud account used by the file owner.
     *
     * @example 3872572****
     *
     * @var string
     */
    public $owner;

    /**
     * @description The ID of the node group file to which the current file belongs. This parameter is returned only if the current file is an inner file of the node group file.
     *
     * @example -1
     *
     * @var int
     */
    public $parentId;

    /**
     * @description The module to which the file belongs. Valid values:
     *
     *   NORMAL: The file is used for DataStudio.
     *   MANUAL: The file is used for a manually triggered node.
     *   MANUAL_BIZ: The file is used for a manually triggered workflow.
     *   SKIP: The files is used for a dry-run node in DataStudio.
     *   ADHOCQUERY: The file is used for an ad hoc query.
     *   COMPONENT: The file is used for a snippet.
     *
     * @example NORMAL
     *
     * @var string
     */
    public $useType;
    protected $_name = [
        'autoParsing'     => 'AutoParsing',
        'bizId'           => 'BizId',
        'businessId'      => 'BusinessId',
        'commitStatus'    => 'CommitStatus',
        'connectionName'  => 'ConnectionName',
        'content'         => 'Content',
        'createTime'      => 'CreateTime',
        'createUser'      => 'CreateUser',
        'currentVersion'  => 'CurrentVersion',
        'fileDescription' => 'FileDescription',
        'fileFolderId'    => 'FileFolderId',
        'fileId'          => 'FileId',
        'fileName'        => 'FileName',
        'fileType'        => 'FileType',
        'isMaxCompute'    => 'IsMaxCompute',
        'lastEditTime'    => 'LastEditTime',
        'lastEditUser'    => 'LastEditUser',
        'nodeId'          => 'NodeId',
        'owner'           => 'Owner',
        'parentId'        => 'ParentId',
        'useType'         => 'UseType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoParsing) {
            $res['AutoParsing'] = $this->autoParsing;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->businessId) {
            $res['BusinessId'] = $this->businessId;
        }
        if (null !== $this->commitStatus) {
            $res['CommitStatus'] = $this->commitStatus;
        }
        if (null !== $this->connectionName) {
            $res['ConnectionName'] = $this->connectionName;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createUser) {
            $res['CreateUser'] = $this->createUser;
        }
        if (null !== $this->currentVersion) {
            $res['CurrentVersion'] = $this->currentVersion;
        }
        if (null !== $this->fileDescription) {
            $res['FileDescription'] = $this->fileDescription;
        }
        if (null !== $this->fileFolderId) {
            $res['FileFolderId'] = $this->fileFolderId;
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
        if (null !== $this->isMaxCompute) {
            $res['IsMaxCompute'] = $this->isMaxCompute;
        }
        if (null !== $this->lastEditTime) {
            $res['LastEditTime'] = $this->lastEditTime;
        }
        if (null !== $this->lastEditUser) {
            $res['LastEditUser'] = $this->lastEditUser;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }
        if (null !== $this->useType) {
            $res['UseType'] = $this->useType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return files
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoParsing'])) {
            $model->autoParsing = $map['AutoParsing'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['BusinessId'])) {
            $model->businessId = $map['BusinessId'];
        }
        if (isset($map['CommitStatus'])) {
            $model->commitStatus = $map['CommitStatus'];
        }
        if (isset($map['ConnectionName'])) {
            $model->connectionName = $map['ConnectionName'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateUser'])) {
            $model->createUser = $map['CreateUser'];
        }
        if (isset($map['CurrentVersion'])) {
            $model->currentVersion = $map['CurrentVersion'];
        }
        if (isset($map['FileDescription'])) {
            $model->fileDescription = $map['FileDescription'];
        }
        if (isset($map['FileFolderId'])) {
            $model->fileFolderId = $map['FileFolderId'];
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
        if (isset($map['IsMaxCompute'])) {
            $model->isMaxCompute = $map['IsMaxCompute'];
        }
        if (isset($map['LastEditTime'])) {
            $model->lastEditTime = $map['LastEditTime'];
        }
        if (isset($map['LastEditUser'])) {
            $model->lastEditUser = $map['LastEditUser'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }
        if (isset($map['UseType'])) {
            $model->useType = $map['UseType'];
        }

        return $model;
    }
}
