<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;

class CreateMergeRequestRequest extends Model
{
    /**
     * @var string
     */
    public $accessToken;
    /**
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
    public $targetBranch;
    /**
     * @var int
     */
    public $targetProjectId;
    /**
     * @var string
     */
    public $title;
    /**
     * @var string
     */
    public $workItemIds;
    /**
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
        if (\is_array($this->reviewerIds)) {
            Model::validateArray($this->reviewerIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->reviewerIds)) {
                $res['reviewerIds'] = [];
                $n1                 = 0;
                foreach ($this->reviewerIds as $item1) {
                    $res['reviewerIds'][$n1++] = $item1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->reviewerIds = [];
                $n1                 = 0;
                foreach ($map['reviewerIds'] as $item1) {
                    $model->reviewerIds[$n1++] = $item1;
                }
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
