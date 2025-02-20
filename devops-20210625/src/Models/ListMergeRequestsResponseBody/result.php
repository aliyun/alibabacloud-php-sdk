<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListMergeRequestsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListMergeRequestsResponseBody\result\author;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListMergeRequestsResponseBody\result\labels;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListMergeRequestsResponseBody\result\reviewers;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListMergeRequestsResponseBody\result\subscribers;

class result extends Model
{
    /**
     * @var author
     */
    public $author;
    /**
     * @var string
     */
    public $createdAt;
    /**
     * @var string
     */
    public $creationMethod;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $detailUrl;
    /**
     * @var int
     */
    public $id;
    /**
     * @var int
     */
    public $iid;
    /**
     * @var labels[]
     */
    public $labels;
    /**
     * @var int
     */
    public $localId;
    /**
     * @var string
     */
    public $mergedRevision;
    /**
     * @var string
     */
    public $mrBizId;
    /**
     * @var string
     */
    public $nameWithNamespace;
    /**
     * @var bool
     */
    public $newMergeRequestIdentifier;
    /**
     * @var string
     */
    public $newVersionState;
    /**
     * @var int
     */
    public $projectId;
    /**
     * @var reviewers[]
     */
    public $reviewers;
    /**
     * @var string
     */
    public $sourceBranch;
    /**
     * @var int
     */
    public $sourceProjectId;
    /**
     * @var string
     */
    public $sourceType;
    /**
     * @var string
     */
    public $sshUrl;
    /**
     * @var string
     */
    public $state;
    /**
     * @var subscribers[]
     */
    public $subscribers;
    /**
     * @var bool
     */
    public $supportMergeFFOnly;
    /**
     * @var string
     */
    public $targetBranch;
    /**
     * @var int
     */
    public $targetProjectId;
    /**
     * @var string
     */
    public $targetType;
    /**
     * @var string
     */
    public $title;
    /**
     * @var string
     */
    public $updatedAt;
    /**
     * @var string
     */
    public $webUrl;
    /**
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
        'mergedRevision'            => 'mergedRevision',
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
        if (null !== $this->author) {
            $this->author->validate();
        }
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        if (\is_array($this->reviewers)) {
            Model::validateArray($this->reviewers);
        }
        if (\is_array($this->subscribers)) {
            Model::validateArray($this->subscribers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->author) {
            $res['author'] = null !== $this->author ? $this->author->toArray($noStream) : $this->author;
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
            if (\is_array($this->labels)) {
                $res['labels'] = [];
                $n1            = 0;
                foreach ($this->labels as $item1) {
                    $res['labels'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->localId) {
            $res['localId'] = $this->localId;
        }

        if (null !== $this->mergedRevision) {
            $res['mergedRevision'] = $this->mergedRevision;
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
            if (\is_array($this->reviewers)) {
                $res['reviewers'] = [];
                $n1               = 0;
                foreach ($this->reviewers as $item1) {
                    $res['reviewers'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->subscribers)) {
                $res['subscribers'] = [];
                $n1                 = 0;
                foreach ($this->subscribers as $item1) {
                    $res['subscribers'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1            = 0;
                foreach ($map['labels'] as $item1) {
                    $model->labels[$n1++] = labels::fromMap($item1);
                }
            }
        }

        if (isset($map['localId'])) {
            $model->localId = $map['localId'];
        }

        if (isset($map['mergedRevision'])) {
            $model->mergedRevision = $map['mergedRevision'];
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
                $n1               = 0;
                foreach ($map['reviewers'] as $item1) {
                    $model->reviewers[$n1++] = reviewers::fromMap($item1);
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
                $n1                 = 0;
                foreach ($map['subscribers'] as $item1) {
                    $model->subscribers[$n1++] = subscribers::fromMap($item1);
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
