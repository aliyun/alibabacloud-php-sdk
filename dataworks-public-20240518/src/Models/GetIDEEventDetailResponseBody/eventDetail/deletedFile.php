<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetIDEEventDetailResponseBody\eventDetail;

use AlibabaCloud\Tea\Model;

class deletedFile extends Model
{
    /**
     * @description The ID of the workflow to which the file belongs.
     *
     * @example 74328
     *
     * @var int
     */
    public $businessId;

    /**
     * @description The code in the file of the current version.
     *
     * @example SHOW TABLES;
     *
     * @var string
     */
    public $content;

    /**
     * @description The latest version number of the file.
     *
     * @example 1
     *
     * @var int
     */
    public $currentVersion;

    /**
     * @description The name of the data source with which the file is associated.
     *
     * @example odps_source
     *
     * @var string
     */
    public $dataSourceName;

    /**
     * @description The file ID.
     *
     * @example 1234123
     *
     * @var int
     */
    public $fileId;

    /**
     * @description The name of the file.
     *
     * @example hello_dataworks.sql
     *
     * @var string
     */
    public $fileName;

    /**
     * @description The file type. The code for files varies based on the file type. For more information, see [DataWorks nodes](https://help.aliyun.com/document_detail/600169.html).
     *
     * @example 10
     *
     * @var int
     */
    public $fileType;

    /**
     * @description The ID of the folder to which the file belongs. You can call the [GetFolder](https://help.aliyun.com/document_detail/173952.html) operation to query the details of the file based on the folder ID.
     *
     * @example aldurie78l2falure
     *
     * @var string
     */
    public $folderId;

    /**
     * @description The ID of the node that is scheduled.
     *
     * @example 421429
     *
     * @var int
     */
    public $nodeId;

    /**
     * @description The file owner.
     *
     * @example 7384234****
     *
     * @var string
     */
    public $owner;

    /**
     * @description The ID of the do-while node or for-each node that corresponds to the file.
     *
     * @example 1234122
     *
     * @var int
     */
    public $parentFileId;

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
        'businessId' => 'BusinessId',
        'content' => 'Content',
        'currentVersion' => 'CurrentVersion',
        'dataSourceName' => 'DataSourceName',
        'fileId' => 'FileId',
        'fileName' => 'FileName',
        'fileType' => 'FileType',
        'folderId' => 'FolderId',
        'nodeId' => 'NodeId',
        'owner' => 'Owner',
        'parentFileId' => 'ParentFileId',
        'useType' => 'UseType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessId) {
            $res['BusinessId'] = $this->businessId;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->currentVersion) {
            $res['CurrentVersion'] = $this->currentVersion;
        }
        if (null !== $this->dataSourceName) {
            $res['DataSourceName'] = $this->dataSourceName;
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
        if (null !== $this->folderId) {
            $res['FolderId'] = $this->folderId;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->parentFileId) {
            $res['ParentFileId'] = $this->parentFileId;
        }
        if (null !== $this->useType) {
            $res['UseType'] = $this->useType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deletedFile
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessId'])) {
            $model->businessId = $map['BusinessId'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['CurrentVersion'])) {
            $model->currentVersion = $map['CurrentVersion'];
        }
        if (isset($map['DataSourceName'])) {
            $model->dataSourceName = $map['DataSourceName'];
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
        if (isset($map['FolderId'])) {
            $model->folderId = $map['FolderId'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['ParentFileId'])) {
            $model->parentFileId = $map['ParentFileId'];
        }
        if (isset($map['UseType'])) {
            $model->useType = $map['UseType'];
        }

        return $model;
    }
}
