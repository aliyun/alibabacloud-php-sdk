<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListFileVersionsResponseBody\data;

use AlibabaCloud\Tea\Model;

class fileVersions extends Model
{
    /**
     * @example UPDATE
     *
     * @var string
     */
    public $changeType;

    /**
     * @var string
     */
    public $comment;

    /**
     * @example 1593881265000
     *
     * @var int
     */
    public $commitTime;

    /**
     * @example 73842342****
     *
     * @var string
     */
    public $commitUser;

    /**
     * @example SHOW TABLES;
     *
     * @var string
     */
    public $fileContent;

    /**
     * @example ods_user_info_d
     *
     * @var string
     */
    public $fileName;

    /**
     * @example {"fileName":"ods_user_info_d","fileType":10}
     *
     * @var string
     */
    public $filePropertyContent;

    /**
     * @example 2
     *
     * @var int
     */
    public $fileVersion;

    /**
     * @example false
     *
     * @var bool
     */
    public $isCurrentProd;

    /**
     * @example {"cycleType":0,"cronExpress":"00 05 00 * * ?"}
     *
     * @var string
     */
    public $nodeContent;

    /**
     * @example 1234
     *
     * @var int
     */
    public $nodeId;

    /**
     * @example COMMITTED
     *
     * @var string
     */
    public $status;

    /**
     * @example NORMAL
     *
     * @var string
     */
    public $useType;
    protected $_name = [
        'changeType'          => 'ChangeType',
        'comment'             => 'Comment',
        'commitTime'          => 'CommitTime',
        'commitUser'          => 'CommitUser',
        'fileContent'         => 'FileContent',
        'fileName'            => 'FileName',
        'filePropertyContent' => 'FilePropertyContent',
        'fileVersion'         => 'FileVersion',
        'isCurrentProd'       => 'IsCurrentProd',
        'nodeContent'         => 'NodeContent',
        'nodeId'              => 'NodeId',
        'status'              => 'Status',
        'useType'             => 'UseType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->changeType) {
            $res['ChangeType'] = $this->changeType;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->commitTime) {
            $res['CommitTime'] = $this->commitTime;
        }
        if (null !== $this->commitUser) {
            $res['CommitUser'] = $this->commitUser;
        }
        if (null !== $this->fileContent) {
            $res['FileContent'] = $this->fileContent;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->filePropertyContent) {
            $res['FilePropertyContent'] = $this->filePropertyContent;
        }
        if (null !== $this->fileVersion) {
            $res['FileVersion'] = $this->fileVersion;
        }
        if (null !== $this->isCurrentProd) {
            $res['IsCurrentProd'] = $this->isCurrentProd;
        }
        if (null !== $this->nodeContent) {
            $res['NodeContent'] = $this->nodeContent;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->useType) {
            $res['UseType'] = $this->useType;
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
        if (isset($map['ChangeType'])) {
            $model->changeType = $map['ChangeType'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['CommitTime'])) {
            $model->commitTime = $map['CommitTime'];
        }
        if (isset($map['CommitUser'])) {
            $model->commitUser = $map['CommitUser'];
        }
        if (isset($map['FileContent'])) {
            $model->fileContent = $map['FileContent'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['FilePropertyContent'])) {
            $model->filePropertyContent = $map['FilePropertyContent'];
        }
        if (isset($map['FileVersion'])) {
            $model->fileVersion = $map['FileVersion'];
        }
        if (isset($map['IsCurrentProd'])) {
            $model->isCurrentProd = $map['IsCurrentProd'];
        }
        if (isset($map['NodeContent'])) {
            $model->nodeContent = $map['NodeContent'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UseType'])) {
            $model->useType = $map['UseType'];
        }

        return $model;
    }
}
