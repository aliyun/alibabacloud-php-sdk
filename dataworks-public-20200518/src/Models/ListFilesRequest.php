<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class ListFilesRequest extends Model
{
    /**
     * @var string
     */
    public $exactFileName;
    /**
     * @var string
     */
    public $fileFolderPath;
    /**
     * @var string
     */
    public $fileIdIn;
    /**
     * @var string
     */
    public $fileTypes;
    /**
     * @var string
     */
    public $keyword;
    /**
     * @var bool
     */
    public $needAbsoluteFolderPath;
    /**
     * @var bool
     */
    public $needContent;
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
    public $pageNumber;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var int
     */
    public $projectId;
    /**
     * @var string
     */
    public $projectIdentifier;
    /**
     * @var string
     */
    public $useType;
    protected $_name = [
        'exactFileName'          => 'ExactFileName',
        'fileFolderPath'         => 'FileFolderPath',
        'fileIdIn'               => 'FileIdIn',
        'fileTypes'              => 'FileTypes',
        'keyword'                => 'Keyword',
        'needAbsoluteFolderPath' => 'NeedAbsoluteFolderPath',
        'needContent'            => 'NeedContent',
        'nodeId'                 => 'NodeId',
        'owner'                  => 'Owner',
        'pageNumber'             => 'PageNumber',
        'pageSize'               => 'PageSize',
        'projectId'              => 'ProjectId',
        'projectIdentifier'      => 'ProjectIdentifier',
        'useType'                => 'UseType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
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
