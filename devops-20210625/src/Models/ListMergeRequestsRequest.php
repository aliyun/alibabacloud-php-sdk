<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class ListMergeRequestsRequest extends Model
{
    /**
     * @example f0b1e61db5961df5975a93f9129d2513
     *
     * @var string
     */
    public $accessToken;

    /**
     * @example 1234567890
     *
     * @var string
     */
    public $authorIds;

    /**
     * @var string
     */
    public $createdAfter;

    /**
     * @var string
     */
    public $createdBefore;

    /**
     * @example new
     *
     * @var string
     */
    public $filter;

    /**
     * @example 889910, 889911
     *
     * @var string
     */
    public $groupIds;

    /**
     * @var string
     */
    public $labelIds;

    /**
     * @example updated_at
     *
     * @var string
     */
    public $orderBy;

    /**
     * @description This parameter is required.
     *
     * @example 60de7a6852743a5162b5f957
     *
     * @var string
     */
    public $organizationId;

    /**
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 2308912, 2308913
     *
     * @var string
     */
    public $projectIds;

    /**
     * @example 1234567890123
     *
     * @var string
     */
    public $reviewerIds;

    /**
     * @example test-search
     *
     * @var string
     */
    public $search;

    /**
     * @example desc
     *
     * @var string
     */
    public $sort;

    /**
     * @example opened
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'accessToken'    => 'accessToken',
        'authorIds'      => 'authorIds',
        'createdAfter'   => 'createdAfter',
        'createdBefore'  => 'createdBefore',
        'filter'         => 'filter',
        'groupIds'       => 'groupIds',
        'labelIds'       => 'labelIds',
        'orderBy'        => 'orderBy',
        'organizationId' => 'organizationId',
        'page'           => 'page',
        'pageSize'       => 'pageSize',
        'projectIds'     => 'projectIds',
        'reviewerIds'    => 'reviewerIds',
        'search'         => 'search',
        'sort'           => 'sort',
        'state'          => 'state',
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
        if (null !== $this->authorIds) {
            $res['authorIds'] = $this->authorIds;
        }
        if (null !== $this->createdAfter) {
            $res['createdAfter'] = $this->createdAfter;
        }
        if (null !== $this->createdBefore) {
            $res['createdBefore'] = $this->createdBefore;
        }
        if (null !== $this->filter) {
            $res['filter'] = $this->filter;
        }
        if (null !== $this->groupIds) {
            $res['groupIds'] = $this->groupIds;
        }
        if (null !== $this->labelIds) {
            $res['labelIds'] = $this->labelIds;
        }
        if (null !== $this->orderBy) {
            $res['orderBy'] = $this->orderBy;
        }
        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
        }
        if (null !== $this->page) {
            $res['page'] = $this->page;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->projectIds) {
            $res['projectIds'] = $this->projectIds;
        }
        if (null !== $this->reviewerIds) {
            $res['reviewerIds'] = $this->reviewerIds;
        }
        if (null !== $this->search) {
            $res['search'] = $this->search;
        }
        if (null !== $this->sort) {
            $res['sort'] = $this->sort;
        }
        if (null !== $this->state) {
            $res['state'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListMergeRequestsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accessToken'])) {
            $model->accessToken = $map['accessToken'];
        }
        if (isset($map['authorIds'])) {
            $model->authorIds = $map['authorIds'];
        }
        if (isset($map['createdAfter'])) {
            $model->createdAfter = $map['createdAfter'];
        }
        if (isset($map['createdBefore'])) {
            $model->createdBefore = $map['createdBefore'];
        }
        if (isset($map['filter'])) {
            $model->filter = $map['filter'];
        }
        if (isset($map['groupIds'])) {
            $model->groupIds = $map['groupIds'];
        }
        if (isset($map['labelIds'])) {
            $model->labelIds = $map['labelIds'];
        }
        if (isset($map['orderBy'])) {
            $model->orderBy = $map['orderBy'];
        }
        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }
        if (isset($map['page'])) {
            $model->page = $map['page'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['projectIds'])) {
            $model->projectIds = $map['projectIds'];
        }
        if (isset($map['reviewerIds'])) {
            $model->reviewerIds = $map['reviewerIds'];
        }
        if (isset($map['search'])) {
            $model->search = $map['search'];
        }
        if (isset($map['sort'])) {
            $model->sort = $map['sort'];
        }
        if (isset($map['state'])) {
            $model->state = $map['state'];
        }

        return $model;
    }
}
