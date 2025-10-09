<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListFilesResponseBody\data;

use AlibabaCloud\Dara\Model;

class files extends Model
{
    /**
     * @var string
     */
    public $absoluteFolderPath;

    /**
     * @var bool
     */
    public $autoParsing;

    /**
     * @var int
     */
    public $bizId;

    /**
     * @var int
     */
    public $businessId;

    /**
     * @var int
     */
    public $commitStatus;

    /**
     * @var string
     */
    public $connectionName;

    /**
     * @var string
     */
    public $content;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $createUser;

    /**
     * @var int
     */
    public $currentVersion;

    /**
     * @var string
     */
    public $fileDescription;

    /**
     * @var string
     */
    public $fileFolderId;

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
     * @var bool
     */
    public $isMaxCompute;

    /**
     * @var int
     */
    public $lastEditTime;

    /**
     * @var string
     */
    public $lastEditUser;

    /**
     * @var int
     */
    public $nodeId;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var int
     */
    public $parentId;

    /**
     * @var string
     */
    public $useType;
    protected $_name = [
        'absoluteFolderPath' => 'AbsoluteFolderPath',
        'autoParsing' => 'AutoParsing',
        'bizId' => 'BizId',
        'businessId' => 'BusinessId',
        'commitStatus' => 'CommitStatus',
        'connectionName' => 'ConnectionName',
        'content' => 'Content',
        'createTime' => 'CreateTime',
        'createUser' => 'CreateUser',
        'currentVersion' => 'CurrentVersion',
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->absoluteFolderPath) {
            $res['AbsoluteFolderPath'] = $this->absoluteFolderPath;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AbsoluteFolderPath'])) {
            $model->absoluteFolderPath = $map['AbsoluteFolderPath'];
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
