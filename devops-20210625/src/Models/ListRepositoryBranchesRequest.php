<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class ListRepositoryBranchesRequest extends Model
{
    /**
     * @example f0b1e61db5961df5975a93f9129d2513
     *
     * @var string
     */
    public $accessToken;

    /**
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
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example Demo
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
    protected $_name = [
        'accessToken'    => 'accessToken',
        'organizationId' => 'organizationId',
        'page'           => 'page',
        'pageSize'       => 'pageSize',
        'search'         => 'search',
        'sort'           => 'sort',
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
        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
        }
        if (null !== $this->page) {
            $res['page'] = $this->page;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->search) {
            $res['search'] = $this->search;
        }
        if (null !== $this->sort) {
            $res['sort'] = $this->sort;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRepositoryBranchesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accessToken'])) {
            $model->accessToken = $map['accessToken'];
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
        if (isset($map['search'])) {
            $model->search = $map['search'];
        }
        if (isset($map['sort'])) {
            $model->sort = $map['sort'];
        }

        return $model;
    }
}
