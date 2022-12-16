<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListFilesResponseBody\data;

use AlibabaCloud\Tea\Model;

class files extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $autoParsing;

    /**
     * @example 300000
     *
     * @var int
     */
    public $bizId;

    /**
     * @example 300000
     *
     * @var int
     */
    public $businessId;

    /**
     * @example 1
     *
     * @var int
     */
    public $commitStatus;

    /**
     * @example odps_first
     *
     * @var string
     */
    public $connectionName;

    /**
     * @example SHOW TABLES;
     *
     * @var string
     */
    public $content;

    /**
     * @example 1593950832000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example 382762****
     *
     * @var string
     */
    public $createUser;

    /**
     * @example 2
     *
     * @var int
     */
    public $currentVersion;

    /**
     * @example my test datastudio file
     *
     * @var string
     */
    public $fileDescription;

    /**
     * @example 2735c2****
     *
     * @var string
     */
    public $fileFolderId;

    /**
     * @example 10000001
     *
     * @var int
     */
    public $fileId;

    /**
     * @example ods_user_info_d
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
     * @example false
     *
     * @var bool
     */
    public $isMaxCompute;

    /**
     * @example 1593950832000
     *
     * @var int
     */
    public $lastEditTime;

    /**
     * @example 38748246285727
     *
     * @var string
     */
    public $lastEditUser;

    /**
     * @example 300001
     *
     * @var int
     */
    public $nodeId;

    /**
     * @example 3872572****
     *
     * @var string
     */
    public $owner;

    /**
     * @example -1
     *
     * @var int
     */
    public $parentId;

    /**
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
