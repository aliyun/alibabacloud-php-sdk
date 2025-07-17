<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetFileResponseBody\data;

use AlibabaCloud\Tea\Model;

class file extends Model
{
    /**
     * @description The advanced configurations of the node.
     *
     * This parameter is valid for an EMR node. This parameter corresponds to the Advanced Settings tab in the right-side navigation pane on the configuration tab of the node in the [DataWorks console](https://workbench.data.aliyun.com/console).
     *
     * >  You cannot configure advanced parameters for EMR Shell nodes.
     *
     * For information about the advanced parameters of each type of EMR node, see [Develop EMR tasks](https://help.aliyun.com/document_detail/473077.html).
     *
     * @example {\\"priority\\":\\"1\\",\\"ENABLE_SPARKSQL_JDBC\\":false,\\"FLOW_SKIP_SQL_ANALYZE\\":false,\\"queue\\":\\"default\\"}
     *
     * @var string
     */
    public $advancedSettings;

    /**
     * @description Indicates whether the automatic parsing feature is enabled for the file. Valid values:
     *
     *   true
     *   false
     *
     * This parameter corresponds to the Automatic Parsing From Code Before Node Committing parameter that is displayed after you select Same Cycle in the Dependencies section of the Properties tab on the DataStudio page in the [DataWorks console](https://workbench.data.aliyun.com/console).
     *
     * @example true
     *
     * @var bool
     */
    public $autoParsing;

    /**
     * @description The ID of the workflow to which the file belongs. This parameter is deprecated and replaced by the BusinessId parameter.
     *
     * @example 1000001
     *
     * @var int
     */
    public $bizId;

    /**
     * @description The ID of the workflow to which the file belongs.
     *
     * @example 1000001
     *
     * @var int
     */
    public $businessId;

    /**
     * @description Indicates whether the latest code in the file is committed. Valid values: 0 and 1. The value 0 indicates that the latest code in the file is not committed. The value 1 indicates that the latest code in the file is committed.
     *
     * @example 0
     *
     * @var int
     */
    public $commitStatus;

    /**
     * @description The name of the data source that is used to run the node that corresponds to the file.
     *
     * @example odps_source
     *
     * @var string
     */
    public $connectionName;

    /**
     * @description The code in the file.
     *
     * @example SHOW TABLES;
     *
     * @var string
     */
    public $content;

    /**
     * @description The time when the file was created. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1593879116000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The ID of the Alibaba Cloud account used to create the file.
     *
     * @example 424732****
     *
     * @var string
     */
    public $createUser;

    /**
     * @description The latest version number of the file.
     *
     * @example 3
     *
     * @var int
     */
    public $currentVersion;

    /**
     * @description The status of the file. Valid values:
     *
     *   NORMAL: The file is not deleted.
     *   RECYCLE_BIN: The file is stored in the recycle bin.
     *   DELETED: The file is deleted.
     *
     * @example RECYCLE
     *
     * @var string
     */
    public $deletedStatus;

    /**
     * @description The description of the file.
     *
     * @example My first DataWorks file
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
     * @description The file ID.
     *
     * @example 100000001
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
     * @description The type of the code for the file. The code for files varies based on the file type. For more information, see [DataWorks nodes](https://help.aliyun.com/document_detail/600169.html).
     *
     * @example 10
     *
     * @var int
     */
    public $fileType;

    /**
     * @description Indicates whether the resource file needs to be uploaded to MaxCompute. This parameter is returned only if the file is a MaxCompute resource file.
     *
     * @example true
     *
     * @var bool
     */
    public $isMaxCompute;

    /**
     * @description The time when the file was last modified. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1593879116000
     *
     * @var int
     */
    public $lastEditTime;

    /**
     * @description The ID of the Alibaba Cloud account used to last modify the file.
     *
     * @example 424732****
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
     * @example 7775674356****
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
        'advancedSettings' => 'AdvancedSettings',
        'autoParsing' => 'AutoParsing',
        'bizId' => 'BizId',
        'businessId' => 'BusinessId',
        'commitStatus' => 'CommitStatus',
        'connectionName' => 'ConnectionName',
        'content' => 'Content',
        'createTime' => 'CreateTime',
        'createUser' => 'CreateUser',
        'currentVersion' => 'CurrentVersion',
        'deletedStatus' => 'DeletedStatus',
        'fileDescription' => 'FileDescription',
        'fileFolderId' => 'FileFolderId',
        'fileId' => 'FileId',
        'fileName' => 'FileName',
        'fileType' => 'FileType',
        'isMaxCompute' => 'IsMaxCompute',
        'lastEditTime' => 'LastEditTime',
        'lastEditUser' => 'LastEditUser',
        'nodeId' => 'NodeId',
        'owner' => 'Owner',
        'parentId' => 'ParentId',
        'useType' => 'UseType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->advancedSettings) {
            $res['AdvancedSettings'] = $this->advancedSettings;
        }
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
        if (null !== $this->deletedStatus) {
            $res['DeletedStatus'] = $this->deletedStatus;
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
     * @return file
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdvancedSettings'])) {
            $model->advancedSettings = $map['AdvancedSettings'];
        }
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
        if (isset($map['DeletedStatus'])) {
            $model->deletedStatus = $map['DeletedStatus'];
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
