<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListFilesResponseBody\data;

use AlibabaCloud\Tea\Model;

class files extends Model
{
    /**
     * @var int
     */
    public $commitStatus;

    /**
     * @var bool
     */
    public $autoParsing;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $fileType;

    /**
     * @var int
     */
    public $currentVersion;

    /**
     * @var int
     */
    public $bizId;

    /**
     * @var string
     */
    public $lastEditUser;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $connectionName;

    /**
     * @var string
     */
    public $useType;

    /**
     * @var string
     */
    public $fileFolderId;

    /**
     * @var int
     */
    public $fileId;

    /**
     * @var int
     */
    public $parentId;

    /**
     * @var string
     */
    public $createUser;

    /**
     * @var bool
     */
    public $isMaxCompute;

    /**
     * @var int
     */
    public $businessId;

    /**
     * @var string
     */
    public $fileDescription;

    /**
     * @var int
     */
    public $lastEditTime;

    /**
     * @var string
     */
    public $content;

    /**
     * @var int
     */
    public $nodeId;
    protected $_name = [
        'commitStatus'    => 'CommitStatus',
        'autoParsing'     => 'AutoParsing',
        'owner'           => 'Owner',
        'createTime'      => 'CreateTime',
        'fileType'        => 'FileType',
        'currentVersion'  => 'CurrentVersion',
        'bizId'           => 'BizId',
        'lastEditUser'    => 'LastEditUser',
        'fileName'        => 'FileName',
        'connectionName'  => 'ConnectionName',
        'useType'         => 'UseType',
        'fileFolderId'    => 'FileFolderId',
        'fileId'          => 'FileId',
        'parentId'        => 'ParentId',
        'createUser'      => 'CreateUser',
        'isMaxCompute'    => 'IsMaxCompute',
        'businessId'      => 'BusinessId',
        'fileDescription' => 'FileDescription',
        'lastEditTime'    => 'LastEditTime',
        'content'         => 'Content',
        'nodeId'          => 'NodeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commitStatus) {
            $res['CommitStatus'] = $this->commitStatus;
        }
        if (null !== $this->autoParsing) {
            $res['AutoParsing'] = $this->autoParsing;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }
        if (null !== $this->currentVersion) {
            $res['CurrentVersion'] = $this->currentVersion;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->lastEditUser) {
            $res['LastEditUser'] = $this->lastEditUser;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->connectionName) {
            $res['ConnectionName'] = $this->connectionName;
        }
        if (null !== $this->useType) {
            $res['UseType'] = $this->useType;
        }
        if (null !== $this->fileFolderId) {
            $res['FileFolderId'] = $this->fileFolderId;
        }
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }
        if (null !== $this->createUser) {
            $res['CreateUser'] = $this->createUser;
        }
        if (null !== $this->isMaxCompute) {
            $res['IsMaxCompute'] = $this->isMaxCompute;
        }
        if (null !== $this->businessId) {
            $res['BusinessId'] = $this->businessId;
        }
        if (null !== $this->fileDescription) {
            $res['FileDescription'] = $this->fileDescription;
        }
        if (null !== $this->lastEditTime) {
            $res['LastEditTime'] = $this->lastEditTime;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
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
        if (isset($map['CommitStatus'])) {
            $model->commitStatus = $map['CommitStatus'];
        }
        if (isset($map['AutoParsing'])) {
            $model->autoParsing = $map['AutoParsing'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }
        if (isset($map['CurrentVersion'])) {
            $model->currentVersion = $map['CurrentVersion'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['LastEditUser'])) {
            $model->lastEditUser = $map['LastEditUser'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['ConnectionName'])) {
            $model->connectionName = $map['ConnectionName'];
        }
        if (isset($map['UseType'])) {
            $model->useType = $map['UseType'];
        }
        if (isset($map['FileFolderId'])) {
            $model->fileFolderId = $map['FileFolderId'];
        }
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }
        if (isset($map['CreateUser'])) {
            $model->createUser = $map['CreateUser'];
        }
        if (isset($map['IsMaxCompute'])) {
            $model->isMaxCompute = $map['IsMaxCompute'];
        }
        if (isset($map['BusinessId'])) {
            $model->businessId = $map['BusinessId'];
        }
        if (isset($map['FileDescription'])) {
            $model->fileDescription = $map['FileDescription'];
        }
        if (isset($map['LastEditTime'])) {
            $model->lastEditTime = $map['LastEditTime'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        return $model;
    }
}
