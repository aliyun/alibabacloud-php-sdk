<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class QueryWorkItemFeedShrinkRequest extends Model
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
    public $cursor;

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
    public $sourceTaskId;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $view;
    protected $_name = [
        'businessStatusesShrink' => 'businessStatuses',
        'collaborationGroupId' => 'collaborationGroupId',
        'cursor' => 'cursor',
        'itemTypesShrink' => 'itemTypes',
        'keyword' => 'keyword',
        'pageSize' => 'pageSize',
        'prioritiesShrink' => 'priorities',
        'scope' => 'scope',
        'sourceTaskId' => 'sourceTaskId',
        'tenantId' => 'tenantId',
        'view' => 'view',
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

        if (null !== $this->cursor) {
            $res['cursor'] = $this->cursor;
        }

        if (null !== $this->itemTypesShrink) {
            $res['itemTypes'] = $this->itemTypesShrink;
        }

        if (null !== $this->keyword) {
            $res['keyword'] = $this->keyword;
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

        if (null !== $this->sourceTaskId) {
            $res['sourceTaskId'] = $this->sourceTaskId;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }

        if (null !== $this->view) {
            $res['view'] = $this->view;
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

        if (isset($map['cursor'])) {
            $model->cursor = $map['cursor'];
        }

        if (isset($map['itemTypes'])) {
            $model->itemTypesShrink = $map['itemTypes'];
        }

        if (isset($map['keyword'])) {
            $model->keyword = $map['keyword'];
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

        if (isset($map['sourceTaskId'])) {
            $model->sourceTaskId = $map['sourceTaskId'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        if (isset($map['view'])) {
            $model->view = $map['view'];
        }

        return $model;
    }
}
