<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class ListFilesRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $commitStatus;

    /**
     * @example ods_create.sql
     *
     * @var string
     */
    public $exactFileName;

    /**
     * @example Business_process/my_first_business_process/MaxCompute/ods_layer
     *
     * @var string
     */
    public $fileFolderPath;

    /**
     * @example 78237,816123
     *
     * @var string
     */
    public $fileIdIn;

    /**
     * @example 10,23
     *
     * @var string
     */
    public $fileTypes;

    /**
     * @example ods
     *
     * @var string
     */
    public $keyword;

    /**
     * @example 11233***
     *
     * @var string
     */
    public $lastEditUser;

    /**
     * @example false
     *
     * @var bool
     */
    public $needAbsoluteFolderPath;

    /**
     * @example false
     *
     * @var bool
     */
    public $needContent;

    /**
     * @example 123541234
     *
     * @var int
     */
    public $nodeId;

    /**
     * @example 3726346****
     *
     * @var string
     */
    public $owner;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 10000
     *
     * @var int
     */
    public $projectId;

    /**
     * @example dw_project
     *
     * @var string
     */
    public $projectIdentifier;

    /**
     * @example NORMAL
     *
     * @var string
     */
    public $useType;
    protected $_name = [
        'commitStatus' => 'CommitStatus',
        'exactFileName' => 'ExactFileName',
        'fileFolderPath' => 'FileFolderPath',
        'fileIdIn' => 'FileIdIn',
        'fileTypes' => 'FileTypes',
        'keyword' => 'Keyword',
        'lastEditUser' => 'LastEditUser',
        'needAbsoluteFolderPath' => 'NeedAbsoluteFolderPath',
        'needContent' => 'NeedContent',
        'nodeId' => 'NodeId',
        'owner' => 'Owner',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'projectId' => 'ProjectId',
        'projectIdentifier' => 'ProjectIdentifier',
        'useType' => 'UseType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->commitStatus) {
            $res['CommitStatus'] = $this->commitStatus;
        }
        if (null !== $this->exactFileName) {
            $res['ExactFileName'] = $this->exactFileName;
        }
        if (null !== $this->fileFolderPath) {
            $res['FileFolderPath'] = $this->fileFolderPath;
        }
        if (null !== $this->fileIdIn) {
            $res['FileIdIn'] = $this->fileIdIn;
        }
        if (null !== $this->fileTypes) {
            $res['FileTypes'] = $this->fileTypes;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->lastEditUser) {
            $res['LastEditUser'] = $this->lastEditUser;
        }
        if (null !== $this->needAbsoluteFolderPath) {
            $res['NeedAbsoluteFolderPath'] = $this->needAbsoluteFolderPath;
        }
        if (null !== $this->needContent) {
            $res['NeedContent'] = $this->needContent;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->projectIdentifier) {
            $res['ProjectIdentifier'] = $this->projectIdentifier;
        }
        if (null !== $this->useType) {
            $res['UseType'] = $this->useType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFilesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommitStatus'])) {
            $model->commitStatus = $map['CommitStatus'];
        }
        if (isset($map['ExactFileName'])) {
            $model->exactFileName = $map['ExactFileName'];
        }
        if (isset($map['FileFolderPath'])) {
            $model->fileFolderPath = $map['FileFolderPath'];
        }
        if (isset($map['FileIdIn'])) {
            $model->fileIdIn = $map['FileIdIn'];
        }
        if (isset($map['FileTypes'])) {
            $model->fileTypes = $map['FileTypes'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['LastEditUser'])) {
            $model->lastEditUser = $map['LastEditUser'];
        }
        if (isset($map['NeedAbsoluteFolderPath'])) {
            $model->needAbsoluteFolderPath = $map['NeedAbsoluteFolderPath'];
        }
        if (isset($map['NeedContent'])) {
            $model->needContent = $map['NeedContent'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProjectIdentifier'])) {
            $model->projectIdentifier = $map['ProjectIdentifier'];
        }
        if (isset($map['UseType'])) {
            $model->useType = $map['UseType'];
        }

        return $model;
    }
}
