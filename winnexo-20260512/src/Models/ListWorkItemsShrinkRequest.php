<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class ListWorkItemsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $businessStatusesShrink;

    /**
     * @var string
     */
    public $collaborationGroupId;

    /**
     * @var string
     */
    public $itemTypesShrink;

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
    public $scope;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'businessStatusesShrink' => 'businessStatuses',
        'collaborationGroupId' => 'collaborationGroupId',
        'itemTypesShrink' => 'itemTypes',
        'keyword' => 'keyword',
        'maxResults' => 'maxResults',
        'nextToken' => 'nextToken',
        'page' => 'page',
        'pageSize' => 'pageSize',
        'prioritiesShrink' => 'priorities',
        'scope' => 'scope',
        'tenantId' => 'tenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->businessStatusesShrink) {
            $res['businessStatuses'] = $this->businessStatusesShrink;
        }

        if (null !== $this->collaborationGroupId) {
            $res['collaborationGroupId'] = $this->collaborationGroupId;
        }

        if (null !== $this->itemTypesShrink) {
            $res['itemTypes'] = $this->itemTypesShrink;
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

        if (null !== $this->scope) {
            $res['scope'] = $this->scope;
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
        if (isset($map['businessStatuses'])) {
            $model->businessStatusesShrink = $map['businessStatuses'];
        }

        if (isset($map['collaborationGroupId'])) {
            $model->collaborationGroupId = $map['collaborationGroupId'];
        }

        if (isset($map['itemTypes'])) {
            $model->itemTypesShrink = $map['itemTypes'];
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

        if (isset($map['scope'])) {
            $model->scope = $map['scope'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
