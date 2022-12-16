<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetIDEEventDetailResponseBody\eventDetail;

use AlibabaCloud\Tea\Model;

class deletedFile extends Model
{
    /**
     * @example 74328
     *
     * @var int
     */
    public $businessId;

    /**
     * @example SHOW TABLES;
     *
     * @var string
     */
    public $content;

    /**
     * @example 1
     *
     * @var int
     */
    public $currentVersion;

    /**
     * @example odps_first
     *
     * @var string
     */
    public $dataSourceName;

    /**
     * @example 1234123
     *
     * @var int
     */
    public $fileId;

    /**
     * @example hello_dataworks.sql
     *
     * @var string
     */
    public $fileName;

    /**
     * @example 10
     *
     * @var int
     */
    public $fileType;

    /**
     * @example aldurie78l2falure
     *
     * @var string
     */
    public $folderId;

    /**
     * @example 421429
     *
     * @var int
     */
    public $nodeId;

    /**
     * @example 7384234****
     *
     * @var string
     */
    public $owner;

    /**
     * @example 1234122
     *
     * @var int
     */
    public $parentFileId;

    /**
     * @example NORMAL
     *
     * @var string
     */
    public $useType;
    protected $_name = [
        'businessId'     => 'BusinessId',
        'content'        => 'Content',
        'currentVersion' => 'CurrentVersion',
        'dataSourceName' => 'DataSourceName',
        'fileId'         => 'FileId',
        'fileName'       => 'FileName',
        'fileType'       => 'FileType',
        'folderId'       => 'FolderId',
        'nodeId'         => 'NodeId',
        'owner'          => 'Owner',
        'parentFileId'   => 'ParentFileId',
        'useType'        => 'UseType',
    ];

    public function validate()
    {
    }

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
