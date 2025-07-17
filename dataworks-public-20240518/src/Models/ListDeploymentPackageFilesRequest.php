<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class ListDeploymentPackageFilesRequest extends Model
{
    /**
     * @description The workflow ID. You can call the [ListBusiness](https://help.aliyun.com/document_detail/173945.html) operation to query the workflow ID by name.
     *
     * @example 100001
     *
     * @var int
     */
    public $businessId;

    /**
     * @description The change type. Valid values:
     *
     *   0: addition
     *   1: update
     *   2: deletion
     *
     * @example 0
     *
     * @var int
     */
    public $changeType;

    /**
     * @description The start date for committing. Specify the date in the yyyy-MM-dd format.
     *
     * @example 2025-01-01
     *
     * @var string
     */
    public $commitFrom;

    /**
     * @description The end date (included) for committing. Specify the date in the yyyy-MM-dd format.
     *
     * @example 2025-01-31
     *
     * @var string
     */
    public $commitTo;

    /**
     * @description The ID of the user who commits the file.
     *
     * @example 2003****
     *
     * @var string
     */
    public $commitUserId;

    /**
     * @description The IDs of the files to be queried.
     *
     * @var string[]
     */
    public $fileIds;

    /**
     * @description The name of the file.
     *
     * @example Filename
     *
     * @var string
     */
    public $fileName;

    /**
     * @description The type of the code for the file.
     *
     * The code for files varies based on the file type. For more information, see [DataWorks nodes](https://help.aliyun.com/document_detail/600169.html). You can call the [ListFileType](https://help.aliyun.com/document_detail/212428.html) operation to query the type of the code for the file.
     *
     * @example 10
     *
     * @var int
     */
    public $fileType;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Default value: 10. Maximum value: 100.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The DataWorks workspace ID. You can log on to the [DataWorks console](https://workbench.data.aliyun.com/console) and go to the Workspace page to query the ID.
     *
     * This parameter is required.
     *
     * @example 12345
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The solution ID.
     *
     * @example 8065
     *
     * @var int
     */
    public $solutionId;
    protected $_name = [
        'businessId' => 'BusinessId',
        'changeType' => 'ChangeType',
        'commitFrom' => 'CommitFrom',
        'commitTo' => 'CommitTo',
        'commitUserId' => 'CommitUserId',
        'fileIds' => 'FileIds',
        'fileName' => 'FileName',
        'fileType' => 'FileType',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'projectId' => 'ProjectId',
        'solutionId' => 'SolutionId',
    ];

    public function validate() {}

    public function toMap()
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
        if (null !== $this->fileIds) {
            $res['FileIds'] = $this->fileIds;
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

    /**
     * @param array $map
     *
     * @return ListDeploymentPackageFilesRequest
     */
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
            if (!empty($map['FileIds'])) {
                $model->fileIds = $map['FileIds'];
            }
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
