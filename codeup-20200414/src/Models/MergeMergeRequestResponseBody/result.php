<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models\MergeMergeRequestResponseBody;

use AlibabaCloud\SDK\Codeup\V20200414\Models\MergeMergeRequestResponseBody\result\approveCheckResult;
use AlibabaCloud\SDK\Codeup\V20200414\Models\MergeMergeRequestResponseBody\result\assigneeList;
use AlibabaCloud\SDK\Codeup\V20200414\Models\MergeMergeRequestResponseBody\result\author;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $behindCommitCount;

    /**
     * @var string
     */
    public $state;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $acceptedRevision;

    /**
     * @var string
     */
    public $sourceBranch;

    /**
     * @var string
     */
    public $webUrl;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $mergeType;

    /**
     * @var string
     */
    public $nameWithNamespace;

    /**
     * @var string
     */
    public $targetBranch;

    /**
     * @var int
     */
    public $aheadCommitCount;

    /**
     * @var string
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $mergeError;

    /**
     * @var string
     */
    public $mergedRevision;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $mergeStatus;

    /**
     * @var assigneeList[]
     */
    public $assigneeList;

    /**
     * @var author
     */
    public $author;

    /**
     * @var approveCheckResult
     */
    public $approveCheckResult;
    protected $_name = [
        'behindCommitCount'  => 'BehindCommitCount',
        'state'              => 'State',
        'projectId'          => 'ProjectId',
        'createdAt'          => 'CreatedAt',
        'acceptedRevision'   => 'AcceptedRevision',
        'sourceBranch'       => 'SourceBranch',
        'webUrl'             => 'WebUrl',
        'description'        => 'Description',
        'mergeType'          => 'MergeType',
        'nameWithNamespace'  => 'NameWithNamespace',
        'targetBranch'       => 'TargetBranch',
        'aheadCommitCount'   => 'AheadCommitCount',
        'updatedAt'          => 'UpdatedAt',
        'title'              => 'Title',
        'mergeError'         => 'MergeError',
        'mergedRevision'     => 'MergedRevision',
        'id'                 => 'Id',
        'mergeStatus'        => 'MergeStatus',
        'assigneeList'       => 'AssigneeList',
        'author'             => 'Author',
        'approveCheckResult' => 'ApproveCheckResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->behindCommitCount) {
            $res['BehindCommitCount'] = $this->behindCommitCount;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }
        if (null !== $this->acceptedRevision) {
            $res['AcceptedRevision'] = $this->acceptedRevision;
        }
        if (null !== $this->sourceBranch) {
            $res['SourceBranch'] = $this->sourceBranch;
        }
        if (null !== $this->webUrl) {
            $res['WebUrl'] = $this->webUrl;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->mergeType) {
            $res['MergeType'] = $this->mergeType;
        }
        if (null !== $this->nameWithNamespace) {
            $res['NameWithNamespace'] = $this->nameWithNamespace;
        }
        if (null !== $this->targetBranch) {
            $res['TargetBranch'] = $this->targetBranch;
        }
        if (null !== $this->aheadCommitCount) {
            $res['AheadCommitCount'] = $this->aheadCommitCount;
        }
        if (null !== $this->updatedAt) {
            $res['UpdatedAt'] = $this->updatedAt;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->mergeError) {
            $res['MergeError'] = $this->mergeError;
        }
        if (null !== $this->mergedRevision) {
            $res['MergedRevision'] = $this->mergedRevision;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->mergeStatus) {
            $res['MergeStatus'] = $this->mergeStatus;
        }
        if (null !== $this->assigneeList) {
            $res['AssigneeList'] = [];
            if (null !== $this->assigneeList && \is_array($this->assigneeList)) {
                $n = 0;
                foreach ($this->assigneeList as $item) {
                    $res['AssigneeList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->author) {
            $res['Author'] = null !== $this->author ? $this->author->toMap() : null;
        }
        if (null !== $this->approveCheckResult) {
            $res['ApproveCheckResult'] = null !== $this->approveCheckResult ? $this->approveCheckResult->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BehindCommitCount'])) {
            $model->behindCommitCount = $map['BehindCommitCount'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }
        if (isset($map['AcceptedRevision'])) {
            $model->acceptedRevision = $map['AcceptedRevision'];
        }
        if (isset($map['SourceBranch'])) {
            $model->sourceBranch = $map['SourceBranch'];
        }
        if (isset($map['WebUrl'])) {
            $model->webUrl = $map['WebUrl'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['MergeType'])) {
            $model->mergeType = $map['MergeType'];
        }
        if (isset($map['NameWithNamespace'])) {
            $model->nameWithNamespace = $map['NameWithNamespace'];
        }
        if (isset($map['TargetBranch'])) {
            $model->targetBranch = $map['TargetBranch'];
        }
        if (isset($map['AheadCommitCount'])) {
            $model->aheadCommitCount = $map['AheadCommitCount'];
        }
        if (isset($map['UpdatedAt'])) {
            $model->updatedAt = $map['UpdatedAt'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['MergeError'])) {
            $model->mergeError = $map['MergeError'];
        }
        if (isset($map['MergedRevision'])) {
            $model->mergedRevision = $map['MergedRevision'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['MergeStatus'])) {
            $model->mergeStatus = $map['MergeStatus'];
        }
        if (isset($map['AssigneeList'])) {
            if (!empty($map['AssigneeList'])) {
                $model->assigneeList = [];
                $n                   = 0;
                foreach ($map['AssigneeList'] as $item) {
                    $model->assigneeList[$n++] = null !== $item ? assigneeList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Author'])) {
            $model->author = author::fromMap($map['Author']);
        }
        if (isset($map['ApproveCheckResult'])) {
            $model->approveCheckResult = approveCheckResult::fromMap($map['ApproveCheckResult']);
        }

        return $model;
    }
}
