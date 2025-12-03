<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;

class ListChangeRequestsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appNameListShrink;

    /**
     * @var string
     */
    public $displayNameKeyword;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $orderBy;

    /**
     * @var string
     */
    public $organizationId;

    /**
     * @var string
     */
    public $ownerIdListShrink;

    /**
     * @var int
     */
    public $page;

    /**
     * @var string
     */
    public $pagination;

    /**
     * @var int
     */
    public $perPage;

    /**
     * @var string
     */
    public $sort;

    /**
     * @var string
     */
    public $stateListShrink;
    protected $_name = [
        'appNameListShrink' => 'appNameList',
        'displayNameKeyword' => 'displayNameKeyword',
        'nextToken' => 'nextToken',
        'orderBy' => 'orderBy',
        'organizationId' => 'organizationId',
        'ownerIdListShrink' => 'ownerIdList',
        'page' => 'page',
        'pagination' => 'pagination',
        'perPage' => 'perPage',
        'sort' => 'sort',
        'stateListShrink' => 'stateList',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appNameListShrink) {
            $res['appNameList'] = $this->appNameListShrink;
        }

        if (null !== $this->displayNameKeyword) {
            $res['displayNameKeyword'] = $this->displayNameKeyword;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->orderBy) {
            $res['orderBy'] = $this->orderBy;
        }

        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
        }

        if (null !== $this->ownerIdListShrink) {
            $res['ownerIdList'] = $this->ownerIdListShrink;
        }

        if (null !== $this->page) {
            $res['page'] = $this->page;
        }

        if (null !== $this->pagination) {
            $res['pagination'] = $this->pagination;
        }

        if (null !== $this->perPage) {
            $res['perPage'] = $this->perPage;
        }

        if (null !== $this->sort) {
            $res['sort'] = $this->sort;
        }

        if (null !== $this->stateListShrink) {
            $res['stateList'] = $this->stateListShrink;
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
        if (isset($map['appNameList'])) {
            $model->appNameListShrink = $map['appNameList'];
        }

        if (isset($map['displayNameKeyword'])) {
            $model->displayNameKeyword = $map['displayNameKeyword'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['orderBy'])) {
            $model->orderBy = $map['orderBy'];
        }

        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }

        if (isset($map['ownerIdList'])) {
            $model->ownerIdListShrink = $map['ownerIdList'];
        }

        if (isset($map['page'])) {
            $model->page = $map['page'];
        }

        if (isset($map['pagination'])) {
            $model->pagination = $map['pagination'];
        }

        if (isset($map['perPage'])) {
            $model->perPage = $map['perPage'];
        }

        if (isset($map['sort'])) {
            $model->sort = $map['sort'];
        }

        if (isset($map['stateList'])) {
            $model->stateListShrink = $map['stateList'];
        }

        return $model;
    }
}
