<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class ListTodosShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $collaborationGroupId;

    /**
     * @var string
     */
    public $keyword;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $prioritiesShrink;

    /**
     * @var string
     */
    public $readStatusShrink;

    /**
     * @var string
     */
    public $sortBy;

    /**
     * @var string
     */
    public $sourceTypesShrink;

    /**
     * @var string
     */
    public $statusesShrink;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'collaborationGroupId' => 'collaborationGroupId',
        'keyword' => 'keyword',
        'maxResults' => 'maxResults',
        'nextToken' => 'nextToken',
        'page' => 'page',
        'pageSize' => 'pageSize',
        'prioritiesShrink' => 'priorities',
        'readStatusShrink' => 'readStatus',
        'sortBy' => 'sortBy',
        'sourceTypesShrink' => 'sourceTypes',
        'statusesShrink' => 'statuses',
        'tenantId' => 'tenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->collaborationGroupId) {
            $res['collaborationGroupId'] = $this->collaborationGroupId;
        }

        if (null !== $this->keyword) {
            $res['keyword'] = $this->keyword;
        }

        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->page) {
            $res['page'] = $this->page;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->prioritiesShrink) {
            $res['priorities'] = $this->prioritiesShrink;
        }

        if (null !== $this->readStatusShrink) {
            $res['readStatus'] = $this->readStatusShrink;
        }

        if (null !== $this->sortBy) {
            $res['sortBy'] = $this->sortBy;
        }

        if (null !== $this->sourceTypesShrink) {
            $res['sourceTypes'] = $this->sourceTypesShrink;
        }

        if (null !== $this->statusesShrink) {
            $res['statuses'] = $this->statusesShrink;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
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
        if (isset($map['collaborationGroupId'])) {
            $model->collaborationGroupId = $map['collaborationGroupId'];
        }

        if (isset($map['keyword'])) {
            $model->keyword = $map['keyword'];
        }

        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['page'])) {
            $model->page = $map['page'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['priorities'])) {
            $model->prioritiesShrink = $map['priorities'];
        }

        if (isset($map['readStatus'])) {
            $model->readStatusShrink = $map['readStatus'];
        }

        if (isset($map['sortBy'])) {
            $model->sortBy = $map['sortBy'];
        }

        if (isset($map['sourceTypes'])) {
            $model->sourceTypesShrink = $map['sourceTypes'];
        }

        if (isset($map['statuses'])) {
            $model->statusesShrink = $map['statuses'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
