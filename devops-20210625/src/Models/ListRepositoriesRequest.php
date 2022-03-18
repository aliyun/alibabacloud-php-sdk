<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class ListRepositoriesRequest extends Model
{
    /**
     * @description accessToken
     *
     * @var string
     */
    public $accessToken;

    /**
     * @description 是否列出归档项目
     *
     * @var bool
     */
    public $archived;

    /**
     * @description 排序字段
     *
     * @var string
     */
    public $orderBy;

    /**
     * @description 企业ID
     *
     * @var string
     */
    public $organizationId;

    /**
     * @description 页码
     *
     * @var int
     */
    public $page;

    /**
     * @description 每页大小
     *
     * @var int
     */
    public $perPage;

    /**
     * @description 搜索关键字
     *
     * @var string
     */
    public $search;

    /**
     * @description 排序方式 (desc: 降序, asc: 升序)
     *
     * @var string
     */
    public $sort;
    protected $_name = [
        'accessToken'    => 'accessToken',
        'archived'       => 'archived',
        'orderBy'        => 'orderBy',
        'organizationId' => 'organizationId',
        'page'           => 'page',
        'perPage'        => 'perPage',
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
        if (null !== $this->archived) {
            $res['archived'] = $this->archived;
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
        if (null !== $this->perPage) {
            $res['perPage'] = $this->perPage;
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
     * @return ListRepositoriesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accessToken'])) {
            $model->accessToken = $map['accessToken'];
        }
        if (isset($map['archived'])) {
            $model->archived = $map['archived'];
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
        if (isset($map['perPage'])) {
            $model->perPage = $map['perPage'];
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
