<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class ListChangeRequestsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appNameListShrink;

    /**
     * @example change1
     *
     * @var string
     */
    public $displayNameKeyword;

    /**
     * @example 4dc150725770510122396e2476
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example id
     *
     * @var string
     */
    public $orderBy;

    /**
     * @description This parameter is required.
     *
     * @example 66c0c9fffeb86b450c199fcd
     *
     * @var string
     */
    public $organizationId;

    /**
     * @var string
     */
    public $ownerIdListShrink;

    /**
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @example keyset
     *
     * @var string
     */
    public $pagination;

    /**
     * @example 20
     *
     * @var int
     */
    public $perPage;

    /**
     * @example desc
     *
     * @var string
     */
    public $sort;

    /**
     * @var string
     */
    public $stateListShrink;
    protected $_name = [
        'appNameListShrink'  => 'appNameList',
        'displayNameKeyword' => 'displayNameKeyword',
        'nextToken'          => 'nextToken',
        'orderBy'            => 'orderBy',
        'organizationId'     => 'organizationId',
        'ownerIdListShrink'  => 'ownerIdList',
        'page'               => 'page',
        'pagination'         => 'pagination',
        'perPage'            => 'perPage',
        'sort'               => 'sort',
        'stateListShrink'    => 'stateList',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ListChangeRequestsShrinkRequest
     */
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
