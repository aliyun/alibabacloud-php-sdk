<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetFileVersionResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The change type of the file version. Valid values: CREATE, UPDATE, and DELETE.
     *
     * @example UPDATE
     *
     * @var string
     */
    public $changeType;

    /**
     * @description The description of the file version.
     *
     * @var string
     */
    public $comment;

    /**
     * @description The time when the version was generated. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1593881265000
     *
     * @var int
     */
    public $commitTime;

    /**
     * @description The ID of the Alibaba Cloud account that is used to create the file version.
     *
     * @example 7384234****
     *
     * @var string
     */
    public $commitUser;

    /**
     * @description The file code.
     *
     * @example SHOW TABLES;
     *
     * @var string
     */
    public $fileContent;

    /**
     * @description The file name.
     *
     * @example ods_user_info_d
     *
     * @var string
     */
    public $fileName;

    /**
     * @description The basic information about the file.
     *
     * @example {"fileName":"ods_user_info_d","fileType":10}
     *
     * @var string
     */
    public $filePropertyContent;

    /**
     * @description The file version.
     *
     * @example 2
     *
     * @var int
     */
    public $fileVersion;

    /**
     * @description Indicates whether the version is the latest version in the production environment.
     *
     * @example true
     *
     * @var bool
     */
    public $isCurrentProd;

    /**
     * @description The scheduling configurations of the node that corresponds to the file version.
     *
     * @example {"cycleType":0,"cronExpress":"00 05 00 * * ?"}
     *
     * @var string
     */
    public $nodeContent;

    /**
     * @description The ID of the node that corresponds to the file version.
     *
     * @example 3000001
     *
     * @var int
     */
    public $nodeId;

    /**
     * @description The status of the file version. Valid values: COMMITTING, COMMITTED, CHECK_OK, PACKAGED, DEPLOYING, DEPLOYED, and CANCELLED. The value CHECK_OK is equivalent to the value COMMITTED.
     *
     * @example COMMITTED
     *
     * @var string
     */
    public $status;

    /**
     * @description The functional module to which the file belongs. Valid values: NORMAL, MANUAL, MANUAL_BIZ, SKIP, ADHOCQUERY, and COMPONENT. The value NORMAL indicates DataStudio. The value MANUAL indicates a manually triggered node. The value MANUAL_BIZ indicates a manually triggered workflow. The value SKIP indicates a dry-run DataStudio node. The value ADHOCQUERY indicates an ad hoc query. The value COMPONENT indicates snippets.
     *
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
     * @return data
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
