<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetMergeRequestResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetMergeRequestResponseBody\result\author;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetMergeRequestResponseBody\result\reviewers;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetMergeRequestResponseBody\result\subscribers;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetMergeRequestResponseBody\result\todoList;

class result extends Model
{
    /**
     * @var int
     */
    public $ahead;

    /**
     * @var bool
     */
    public $allRequirementsPass;

    /**
     * @var author
     */
    public $author;

    /**
     * @var int
     */
    public $behind;

    /**
     * @var string
     */
    public $createFrom;

    /**
     * @var string
     */
    public $createTime;

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
    public $mrType;

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
    public $status;

    /**
     * @var subscribers[]
     */
    public $subscribers;

    /**
     * @var bool
     */
    public $supportMergeFastForwardOnly;

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
    public $targetProjectNameWithNamespace;

    /**
     * @var string
     */
    public $targetProjectPathWithNamespace;

    /**
     * @var string
     */
    public $title;

    /**
     * @var todoList
     */
    public $todoList;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $webUrl;
    protected $_name = [
        'ahead' => 'ahead',
        'allRequirementsPass' => 'allRequirementsPass',
        'author' => 'author',
        'behind' => 'behind',
        'createFrom' => 'createFrom',
        'createTime' => 'createTime',
        'description' => 'description',
        'detailUrl' => 'detailUrl',
        'localId' => 'localId',
        'mergedRevision' => 'mergedRevision',
        'mrBizId' => 'mrBizId',
        'mrType' => 'mrType',
        'projectId' => 'projectId',
        'reviewers' => 'reviewers',
        'sourceBranch' => 'sourceBranch',
        'sourceProjectId' => 'sourceProjectId',
        'status' => 'status',
        'subscribers' => 'subscribers',
        'supportMergeFastForwardOnly' => 'supportMergeFastForwardOnly',
        'targetBranch' => 'targetBranch',
        'targetProjectId' => 'targetProjectId',
        'targetProjectNameWithNamespace' => 'targetProjectNameWithNamespace',
        'targetProjectPathWithNamespace' => 'targetProjectPathWithNamespace',
        'title' => 'title',
        'todoList' => 'todoList',
        'updateTime' => 'updateTime',
        'webUrl' => 'webUrl',
    ];

    public function validate()
    {
        if (null !== $this->author) {
            $this->author->validate();
        }
        if (\is_array($this->reviewers)) {
            Model::validateArray($this->reviewers);
        }
        if (\is_array($this->subscribers)) {
            Model::validateArray($this->subscribers);
        }
        if (null !== $this->todoList) {
            $this->todoList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ahead) {
            $res['ahead'] = $this->ahead;
        }

        if (null !== $this->allRequirementsPass) {
            $res['allRequirementsPass'] = $this->allRequirementsPass;
        }

        if (null !== $this->author) {
            $res['author'] = null !== $this->author ? $this->author->toArray($noStream) : $this->author;
        }

        if (null !== $this->behind) {
            $res['behind'] = $this->behind;
        }

        if (null !== $this->createFrom) {
            $res['createFrom'] = $this->createFrom;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->detailUrl) {
            $res['detailUrl'] = $this->detailUrl;
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

        if (null !== $this->mrType) {
            $res['mrType'] = $this->mrType;
        }

        if (null !== $this->projectId) {
            $res['projectId'] = $this->projectId;
        }

        if (null !== $this->reviewers) {
            if (\is_array($this->reviewers)) {
                $res['reviewers'] = [];
                $n1 = 0;
                foreach ($this->reviewers as $item1) {
                    $res['reviewers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sourceBranch) {
            $res['sourceBranch'] = $this->sourceBranch;
        }

        if (null !== $this->sourceProjectId) {
            $res['sourceProjectId'] = $this->sourceProjectId;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->subscribers) {
            if (\is_array($this->subscribers)) {
                $res['subscribers'] = [];
                $n1 = 0;
                foreach ($this->subscribers as $item1) {
                    $res['subscribers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->supportMergeFastForwardOnly) {
            $res['supportMergeFastForwardOnly'] = $this->supportMergeFastForwardOnly;
        }

        if (null !== $this->targetBranch) {
            $res['targetBranch'] = $this->targetBranch;
        }

        if (null !== $this->targetProjectId) {
            $res['targetProjectId'] = $this->targetProjectId;
        }

        if (null !== $this->targetProjectNameWithNamespace) {
            $res['targetProjectNameWithNamespace'] = $this->targetProjectNameWithNamespace;
        }

        if (null !== $this->targetProjectPathWithNamespace) {
            $res['targetProjectPathWithNamespace'] = $this->targetProjectPathWithNamespace;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        if (null !== $this->todoList) {
            $res['todoList'] = null !== $this->todoList ? $this->todoList->toArray($noStream) : $this->todoList;
        }

        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }

        if (null !== $this->webUrl) {
            $res['webUrl'] = $this->webUrl;
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
        if (isset($map['ahead'])) {
            $model->ahead = $map['ahead'];
        }

        if (isset($map['allRequirementsPass'])) {
            $model->allRequirementsPass = $map['allRequirementsPass'];
        }

        if (isset($map['author'])) {
            $model->author = author::fromMap($map['author']);
        }

        if (isset($map['behind'])) {
            $model->behind = $map['behind'];
        }

        if (isset($map['createFrom'])) {
            $model->createFrom = $map['createFrom'];
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['detailUrl'])) {
            $model->detailUrl = $map['detailUrl'];
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

        if (isset($map['mrType'])) {
            $model->mrType = $map['mrType'];
        }

        if (isset($map['projectId'])) {
            $model->projectId = $map['projectId'];
        }

        if (isset($map['reviewers'])) {
            if (!empty($map['reviewers'])) {
                $model->reviewers = [];
                $n1 = 0;
                foreach ($map['reviewers'] as $item1) {
                    $model->reviewers[$n1] = reviewers::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['sourceBranch'])) {
            $model->sourceBranch = $map['sourceBranch'];
        }

        if (isset($map['sourceProjectId'])) {
            $model->sourceProjectId = $map['sourceProjectId'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['subscribers'])) {
            if (!empty($map['subscribers'])) {
                $model->subscribers = [];
                $n1 = 0;
                foreach ($map['subscribers'] as $item1) {
                    $model->subscribers[$n1] = subscribers::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['supportMergeFastForwardOnly'])) {
            $model->supportMergeFastForwardOnly = $map['supportMergeFastForwardOnly'];
        }

        if (isset($map['targetBranch'])) {
            $model->targetBranch = $map['targetBranch'];
        }

        if (isset($map['targetProjectId'])) {
            $model->targetProjectId = $map['targetProjectId'];
        }

        if (isset($map['targetProjectNameWithNamespace'])) {
            $model->targetProjectNameWithNamespace = $map['targetProjectNameWithNamespace'];
        }

        if (isset($map['targetProjectPathWithNamespace'])) {
            $model->targetProjectPathWithNamespace = $map['targetProjectPathWithNamespace'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        if (isset($map['todoList'])) {
            $model->todoList = todoList::fromMap($map['todoList']);
        }

        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        if (isset($map['webUrl'])) {
            $model->webUrl = $map['webUrl'];
        }

        return $model;
    }
}
