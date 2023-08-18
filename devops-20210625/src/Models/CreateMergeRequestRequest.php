<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class CreateMergeRequestRequest extends Model
{
    /**
     * @example f0b1e61db5961df5975a93f9129d2513
     *
     * @var string
     */
    public $accessToken;

    /**
     * @example WEB
     *
     * @var string
     */
    public $createFrom;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $reviewerIds;

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
     * @example 722200214032b6b31e6f1434ab
     *
     * @var string
     */
    public $workItemIds;

    /**
     * @example 6270e731cfea268afc21ccac
     *
     * @var string
     */
    public $organizationId;
    protected $_name = [
        'accessToken'     => 'accessToken',
        'createFrom'      => 'createFrom',
        'description'     => 'description',
        'reviewerIds'     => 'reviewerIds',
        'sourceBranch'    => 'sourceBranch',
        'sourceProjectId' => 'sourceProjectId',
        'targetBranch'    => 'targetBranch',
        'targetProjectId' => 'targetProjectId',
        'title'           => 'title',
        'workItemIds'     => 'workItemIds',
        'organizationId'  => 'organizationId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['accessToken'] = $this->accessToken;
        }
        if (null !== $this->createFrom) {
            $res['createFrom'] = $this->createFrom;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->reviewerIds) {
            $res['reviewerIds'] = $this->reviewerIds;
        }
        if (null !== $this->sourceBranch) {
            $res['sourceBranch'] = $this->sourceBranch;
        }
        if (null !== $this->sourceProjectId) {
            $res['sourceProjectId'] = $this->sourceProjectId;
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
        if (null !== $this->workItemIds) {
            $res['workItemIds'] = $this->workItemIds;
        }
        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMergeRequestRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accessToken'])) {
            $model->accessToken = $map['accessToken'];
        }
        if (isset($map['createFrom'])) {
            $model->createFrom = $map['createFrom'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['reviewerIds'])) {
            if (!empty($map['reviewerIds'])) {
                $model->reviewerIds = $map['reviewerIds'];
            }
        }
        if (isset($map['sourceBranch'])) {
            $model->sourceBranch = $map['sourceBranch'];
        }
        if (isset($map['sourceProjectId'])) {
            $model->sourceProjectId = $map['sourceProjectId'];
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
        if (isset($map['workItemIds'])) {
            $model->workItemIds = $map['workItemIds'];
        }
        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }

        return $model;
    }
}
