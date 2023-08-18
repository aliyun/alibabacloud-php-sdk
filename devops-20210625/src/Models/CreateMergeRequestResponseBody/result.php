<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\CreateMergeRequestResponseBody;

use AlibabaCloud\SDK\Devops\V20210625\Models\CreateMergeRequestResponseBody\result\author;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateMergeRequestResponseBody\result\reviewers;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateMergeRequestResponseBody\result\subscribers;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 2
     *
     * @var int
     */
    public $ahead;

    /**
     * @example true
     *
     * @var bool
     */
    public $allRequirementsPass;

    /**
     * @var author
     */
    public $author;

    /**
     * @example 0
     *
     * @var int
     */
    public $behind;

    /**
     * @example WEB
     *
     * @var string
     */
    public $createFrom;

    /**
     * @example 2023-06-02T03:41:22Z
     *
     * @var string
     */
    public $createTime;

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
    public $localId;

    /**
     * @example bca90244c4b749e0b109df52ac0eb570
     *
     * @var string
     */
    public $mrBizId;

    /**
     * @example CODE_REVIEW
     *
     * @var string
     */
    public $mrType;

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
     * @example sourceBranch
     *
     * @var string
     */
    public $sourceBranch;

    /**
     * @example 2369234
     *
     * @var int
     */
    public $sourceProjectId;

    /**
     * @example UNDER_REVIEW
     *
     * @var string
     */
    public $status;

    /**
     * @var subscribers[]
     */
    public $subscribers;

    /**
     * @example true
     *
     * @var bool
     */
    public $supportMergeFastForwardOnly;

    /**
     * @example targetBranch
     *
     * @var string
     */
    public $targetBranch;

    /**
     * @example 2369234
     *
     * @var int
     */
    public $targetProjectId;

    /**
     * @var string
     */
    public $title;

    /**
     * @example 2023-06-02T03:41:22Z
     *
     * @var string
     */
    public $updateTime;

    /**
     * @example https://codeup.aliyun.com/xxx/test/test
     *
     * @var string
     */
    public $webUrl;
    protected $_name = [
        'ahead'                       => 'ahead',
        'allRequirementsPass'         => 'allRequirementsPass',
        'author'                      => 'author',
        'behind'                      => 'behind',
        'createFrom'                  => 'createFrom',
        'createTime'                  => 'createTime',
        'description'                 => 'description',
        'detailUrl'                   => 'detailUrl',
        'localId'                     => 'localId',
        'mrBizId'                     => 'mrBizId',
        'mrType'                      => 'mrType',
        'projectId'                   => 'projectId',
        'reviewers'                   => 'reviewers',
        'sourceBranch'                => 'sourceBranch',
        'sourceProjectId'             => 'sourceProjectId',
        'status'                      => 'status',
        'subscribers'                 => 'subscribers',
        'supportMergeFastForwardOnly' => 'supportMergeFastForwardOnly',
        'targetBranch'                => 'targetBranch',
        'targetProjectId'             => 'targetProjectId',
        'title'                       => 'title',
        'updateTime'                  => 'updateTime',
        'webUrl'                      => 'webUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ahead) {
            $res['ahead'] = $this->ahead;
        }
        if (null !== $this->allRequirementsPass) {
            $res['allRequirementsPass'] = $this->allRequirementsPass;
        }
        if (null !== $this->author) {
            $res['author'] = null !== $this->author ? $this->author->toMap() : null;
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
        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (null !== $this->supportMergeFastForwardOnly) {
            $res['supportMergeFastForwardOnly'] = $this->supportMergeFastForwardOnly;
        }
        if (null !== $this->targetBranch) {
            $res['targetBranch'] = $this->targetBranch;
        }
        if (null !== $this->targetProjectId) {
            $res['targetProjectId'] = $this->targetProjectId;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }
        if (null !== $this->webUrl) {
            $res['webUrl'] = $this->webUrl;
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
        if (isset($map['status'])) {
            $model->status = $map['status'];
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
        if (isset($map['supportMergeFastForwardOnly'])) {
            $model->supportMergeFastForwardOnly = $map['supportMergeFastForwardOnly'];
        }
        if (isset($map['targetBranch'])) {
            $model->targetBranch = $map['targetBranch'];
        }
        if (isset($map['targetProjectId'])) {
            $model->targetProjectId = $map['targetProjectId'];
        }
        if (isset($map['title'])) {
            $model->title = $map['title'];
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
