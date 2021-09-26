<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListFileVersionsResponseBody\data;

use AlibabaCloud\Tea\Model;

class fileVersions extends Model
{
    /**
     * @var string
     */
    public $fileContent;

    /**
     * @var string
     */
    public $status;

    /**
     * @var bool
     */
    public $isCurrentProd;

    /**
     * @var string
     */
    public $commitUser;

    /**
     * @var string
     */
    public $nodeContent;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $filePropertyContent;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $useType;

    /**
     * @var string
     */
    public $changeType;

    /**
     * @var int
     */
    public $fileVersion;

    /**
     * @var int
     */
    public $commitTime;

    /**
     * @var int
     */
    public $nodeId;
    protected $_name = [
        'fileContent'         => 'FileContent',
        'status'              => 'Status',
        'isCurrentProd'       => 'IsCurrentProd',
        'commitUser'          => 'CommitUser',
        'nodeContent'         => 'NodeContent',
        'comment'             => 'Comment',
        'filePropertyContent' => 'FilePropertyContent',
        'fileName'            => 'FileName',
        'useType'             => 'UseType',
        'changeType'          => 'ChangeType',
        'fileVersion'         => 'FileVersion',
        'commitTime'          => 'CommitTime',
        'nodeId'              => 'NodeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileContent) {
            $res['FileContent'] = $this->fileContent;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->isCurrentProd) {
            $res['IsCurrentProd'] = $this->isCurrentProd;
        }
        if (null !== $this->commitUser) {
            $res['CommitUser'] = $this->commitUser;
        }
        if (null !== $this->nodeContent) {
            $res['NodeContent'] = $this->nodeContent;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->filePropertyContent) {
            $res['FilePropertyContent'] = $this->filePropertyContent;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->useType) {
            $res['UseType'] = $this->useType;
        }
        if (null !== $this->changeType) {
            $res['ChangeType'] = $this->changeType;
        }
        if (null !== $this->fileVersion) {
            $res['FileVersion'] = $this->fileVersion;
        }
        if (null !== $this->commitTime) {
            $res['CommitTime'] = $this->commitTime;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fileVersions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileContent'])) {
            $model->fileContent = $map['FileContent'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['IsCurrentProd'])) {
            $model->isCurrentProd = $map['IsCurrentProd'];
        }
        if (isset($map['CommitUser'])) {
            $model->commitUser = $map['CommitUser'];
        }
        if (isset($map['NodeContent'])) {
            $model->nodeContent = $map['NodeContent'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['FilePropertyContent'])) {
            $model->filePropertyContent = $map['FilePropertyContent'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['UseType'])) {
            $model->useType = $map['UseType'];
        }
        if (isset($map['ChangeType'])) {
            $model->changeType = $map['ChangeType'];
        }
        if (isset($map['FileVersion'])) {
            $model->fileVersion = $map['FileVersion'];
        }
        if (isset($map['CommitTime'])) {
            $model->commitTime = $map['CommitTime'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        return $model;
    }
}
