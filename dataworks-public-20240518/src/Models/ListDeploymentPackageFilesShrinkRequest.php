<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class ListDeploymentPackageFilesShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $businessId;

    /**
     * @var int
     */
    public $changeType;

    /**
     * @var string
     */
    public $commitFrom;

    /**
     * @var string
     */
    public $commitTo;

    /**
     * @var string
     */
    public $commitUserId;

    /**
     * @var string
     */
    public $fileIdsShrink;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var int
     */
    public $fileType;

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
     * @var int
     */
    public $solutionId;
    protected $_name = [
        'businessId' => 'BusinessId',
        'changeType' => 'ChangeType',
        'commitFrom' => 'CommitFrom',
        'commitTo' => 'CommitTo',
        'commitUserId' => 'CommitUserId',
        'fileIdsShrink' => 'FileIds',
        'fileName' => 'FileName',
        'fileType' => 'FileType',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'projectId' => 'ProjectId',
        'solutionId' => 'SolutionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->businessId) {
            $res['BusinessId'] = $this->businessId;
        }

        if (null !== $this->changeType) {
            $res['ChangeType'] = $this->changeType;
        }

        if (null !== $this->commitFrom) {
            $res['CommitFrom'] = $this->commitFrom;
        }

        if (null !== $this->commitTo) {
            $res['CommitTo'] = $this->commitTo;
        }

        if (null !== $this->commitUserId) {
            $res['CommitUserId'] = $this->commitUserId;
        }

        if (null !== $this->fileIdsShrink) {
            $res['FileIds'] = $this->fileIdsShrink;
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
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

        if (null !== $this->solutionId) {
            $res['SolutionId'] = $this->solutionId;
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
        if (isset($map['BusinessId'])) {
            $model->businessId = $map['BusinessId'];
        }

        if (isset($map['ChangeType'])) {
            $model->changeType = $map['ChangeType'];
        }

        if (isset($map['CommitFrom'])) {
            $model->commitFrom = $map['CommitFrom'];
        }

        if (isset($map['CommitTo'])) {
            $model->commitTo = $map['CommitTo'];
        }

        if (isset($map['CommitUserId'])) {
            $model->commitUserId = $map['CommitUserId'];
        }

        if (isset($map['FileIds'])) {
            $model->fileIdsShrink = $map['FileIds'];
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
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

        if (isset($map['SolutionId'])) {
            $model->solutionId = $map['SolutionId'];
        }

        return $model;
    }
}
