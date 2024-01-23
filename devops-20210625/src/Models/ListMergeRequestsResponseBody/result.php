<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListMergeRequestsResponseBody;

use AlibabaCloud\SDK\Devops\V20210625\Models\ListMergeRequestsResponseBody\result\author;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListMergeRequestsResponseBody\result\labels;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListMergeRequestsResponseBody\result\reviewers;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListMergeRequestsResponseBody\result\subscribers;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var author
     */
    public $author;

    /**
     * @example 2022-03-18 14:24:54
     *
     * @var string
     */
    public $createdAt;

    /**
     * @example WEB
     *
     * @var string
     */
    public $creationMethod;

    /**
     * @var string
     */
    public $description;

    /**
     * @example xxx
     *
     * @var string
     */
    public $detailUrl;

    /**
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @example 1
     *
     * @var int
     */
    public $iid;

    /**
     * @var labels[]
     */
    public $labels;

    /**
     * @example 2
     *
     * @var int
     */
    public $localId;

    /**
     * @example bca90244c4b749e0b109df52ac0eb570
     *
     * @var string
     */
    public $mrBizId;

    /**
     * @var string
     */
    public $nameWithNamespace;

    /**
     * @example true
     *
     * @var bool
     */
    public $newMergeRequestIdentifier;

    /**
     * @example UNDER_REVIEW
     *
     * @var string
     */
    public $newVersionState;

    /**
     * @example 2369234
     *
     * @var int
     */
    public $projectId;

    /**
     * @var reviewers[]
     */
    public $reviewers;

    /**
     * @example test-merge-source-branch
     *
     * @var string
     */
    public $sourceBranch;

    /**
     * @example 2876119
     *
     * @var int
     */
    public $sourceProjectId;

    /**
     * @example BRANCH
     *
     * @var string
     */
    public $sourceType;

    /**
     * @example git@xxx:xxx/test/test.git
     *
     * @var string
     */
    public $sshUrl;

    /**
     * @example opened
     *
     * @var string
     */
    public $state;

    /**
     * @var subscribers[]
     */
    public $subscribers;

    /**
     * @example true
     *
     * @var bool
     */
    public $supportMergeFFOnly;

    /**
     * @example test-merge-target-branch
     *
     * @var string
     */
    public $targetBranch;

    /**
     * @example 2876119
     *
     * @var int
     */
    public $targetProjectId;

    /**
     * @example BRANCH
     *
     * @var string
     */
    public $targetType;

    /**
     * @var string
     */
    public $title;

    /**
     * @example 2022-03-18 14:24:54
     *
     * @var string
     */
    public $updatedAt;

    /**
     * @example ""
     *
     * @var string
     */
    public $webUrl;

    /**
     * @example false
     *
     * @var bool
     */
    public $workInProgress;
    protected $_name = [
        'author'                    => 'author',
        'createdAt'                 => 'createdAt',
        'creationMethod'            => 'creationMethod',
        'description'               => 'description',
        'detailUrl'                 => 'detailUrl',
        'id'                        => 'id',
        'iid'                       => 'iid',
        'labels'                    => 'labels',
        'localId'                   => 'localId',
        'mrBizId'                   => 'mrBizId',
        'nameWithNamespace'         => 'nameWithNamespace',
        'newMergeRequestIdentifier' => 'newMergeRequestIdentifier',
        'newVersionState'           => 'newVersionState',
        'projectId'                 => 'projectId',
        'reviewers'                 => 'reviewers',
        'sourceBranch'              => 'sourceBranch',
        'sourceProjectId'           => 'sourceProjectId',
        'sourceType'                => 'sourceType',
        'sshUrl'                    => 'sshUrl',
        'state'                     => 'state',
        'subscribers'               => 'subscribers',
        'supportMergeFFOnly'        => 'supportMergeFFOnly',
        'targetBranch'              => 'targetBranch',
        'targetProjectId'           => 'targetProjectId',
        'targetType'                => 'targetType',
        'title'                     => 'title',
        'updatedAt'                 => 'updatedAt',
        'webUrl'                    => 'webUrl',
        'workInProgress'            => 'workInProgress',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->author) {
            $res['author'] = null !== $this->author ? $this->author->toMap() : null;
        }
        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }
        if (null !== $this->creationMethod) {
            $res['creationMethod'] = $this->creationMethod;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->detailUrl) {
            $res['detailUrl'] = $this->detailUrl;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->iid) {
            $res['iid'] = $this->iid;
        }
        if (null !== $this->labels) {
            $res['labels'] = [];
            if (null !== $this->labels && \is_array($this->labels)) {
                $n = 0;
                foreach ($this->labels as $item) {
                    $res['labels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->localId) {
            $res['localId'] = $this->localId;
        }
        if (null !== $this->mrBizId) {
            $res['mrBizId'] = $this->mrBizId;
        }
        if (null !== $this->nameWithNamespace) {
            $res['nameWithNamespace'] = $this->nameWithNamespace;
        }
        if (null !== $this->newMergeRequestIdentifier) {
            $res['newMergeRequestIdentifier'] = $this->newMergeRequestIdentifier;
        }
        if (null !== $this->newVersionState) {
            $res['newVersionState'] = $this->newVersionState;
        }
        if (null !== $this->projectId) {
            $res['projectId'] = $this->projectId;
        }
        if (null !== $this->reviewers) {
            $res['reviewers'] = [];
            if (null !== $this->reviewers && \is_array($this->reviewers)) {
                $n = 0;
                foreach ($this->reviewers as $item) {
                    $res['reviewers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sourceBranch) {
            $res['sourceBranch'] = $this->sourceBranch;
        }
        if (null !== $this->sourceProjectId) {
            $res['sourceProjectId'] = $this->sourceProjectId;
        }
        if (null !== $this->sourceType) {
            $res['sourceType'] = $this->sourceType;
        }
        if (null !== $this->sshUrl) {
            $res['sshUrl'] = $this->sshUrl;
        }
        if (null !== $this->state) {
            $res['state'] = $this->state;
        }
        if (null !== $this->subscribers) {
            $res['subscribers'] = [];
            if (null !== $this->subscribers && \is_array($this->subscribers)) {
                $n = 0;
                foreach ($this->subscribers as $item) {
                    $res['subscribers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->supportMergeFFOnly) {
            $res['supportMergeFFOnly'] = $this->supportMergeFFOnly;
        }
        if (null !== $this->targetBranch) {
            $res['targetBranch'] = $this->targetBranch;
        }
        if (null !== $this->targetProjectId) {
            $res['targetProjectId'] = $this->targetProjectId;
        }
        if (null !== $this->targetType) {
            $res['targetType'] = $this->targetType;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
        }
        if (null !== $this->webUrl) {
            $res['webUrl'] = $this->webUrl;
        }
        if (null !== $this->workInProgress) {
            $res['workInProgress'] = $this->workInProgress;
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
        if (isset($map['author'])) {
            $model->author = author::fromMap($map['author']);
        }
        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }
        if (isset($map['creationMethod'])) {
            $model->creationMethod = $map['creationMethod'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['detailUrl'])) {
            $model->detailUrl = $map['detailUrl'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['iid'])) {
            $model->iid = $map['iid'];
        }
        if (isset($map['labels'])) {
            if (!empty($map['labels'])) {
                $model->labels = [];
                $n             = 0;
                foreach ($map['labels'] as $item) {
                    $model->labels[$n++] = null !== $item ? labels::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['localId'])) {
            $model->localId = $map['localId'];
        }
        if (isset($map['mrBizId'])) {
            $model->mrBizId = $map['mrBizId'];
        }
        if (isset($map['nameWithNamespace'])) {
            $model->nameWithNamespace = $map['nameWithNamespace'];
        }
        if (isset($map['newMergeRequestIdentifier'])) {
            $model->newMergeRequestIdentifier = $map['newMergeRequestIdentifier'];
        }
        if (isset($map['newVersionState'])) {
            $model->newVersionState = $map['newVersionState'];
        }
        if (isset($map['projectId'])) {
            $model->projectId = $map['projectId'];
        }
        if (isset($map['reviewers'])) {
            if (!empty($map['reviewers'])) {
                $model->reviewers = [];
                $n                = 0;
                foreach ($map['reviewers'] as $item) {
                    $model->reviewers[$n++] = null !== $item ? reviewers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['sourceBranch'])) {
            $model->sourceBranch = $map['sourceBranch'];
        }
        if (isset($map['sourceProjectId'])) {
            $model->sourceProjectId = $map['sourceProjectId'];
        }
        if (isset($map['sourceType'])) {
            $model->sourceType = $map['sourceType'];
        }
        if (isset($map['sshUrl'])) {
            $model->sshUrl = $map['sshUrl'];
        }
        if (isset($map['state'])) {
            $model->state = $map['state'];
        }
        if (isset($map['subscribers'])) {
            if (!empty($map['subscribers'])) {
                $model->subscribers = [];
                $n                  = 0;
                foreach ($map['subscribers'] as $item) {
                    $model->subscribers[$n++] = null !== $item ? subscribers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['supportMergeFFOnly'])) {
            $model->supportMergeFFOnly = $map['supportMergeFFOnly'];
        }
        if (isset($map['targetBranch'])) {
            $model->targetBranch = $map['targetBranch'];
        }
        if (isset($map['targetProjectId'])) {
            $model->targetProjectId = $map['targetProjectId'];
        }
        if (isset($map['targetType'])) {
            $model->targetType = $map['targetType'];
        }
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }
        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }
        if (isset($map['webUrl'])) {
            $model->webUrl = $map['webUrl'];
        }
        if (isset($map['workInProgress'])) {
            $model->workInProgress = $map['workInProgress'];
        }

        return $model;
    }
}
