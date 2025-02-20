<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;

class ListProjectLabelsRequest extends Model
{
    /**
     * @var string
     */
    public $accessToken;
    /**
     * @var string
     */
    public $orderBy;
    /**
     * @var string
     */
    public $organizationId;
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
    public $repositoryIdentity;
    /**
     * @var string
     */
    public $search;
    /**
     * @var string
     */
    public $sort;
    /**
     * @var bool
     */
    public $withCounts;
    protected $_name = [
        'accessToken'        => 'accessToken',
        'orderBy'            => 'orderBy',
        'organizationId'     => 'organizationId',
        'page'               => 'page',
        'pageSize'           => 'pageSize',
        'repositoryIdentity' => 'repositoryIdentity',
        'search'             => 'search',
        'sort'               => 'sort',
        'withCounts'         => 'withCounts',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['accessToken'] = $this->accessToken;
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

        if (null !== $this->repositoryIdentity) {
            $res['repositoryIdentity'] = $this->repositoryIdentity;
        }

        if (null !== $this->search) {
            $res['search'] = $this->search;
        }

        if (null !== $this->sort) {
            $res['sort'] = $this->sort;
        }

        if (null !== $this->withCounts) {
            $res['withCounts'] = $this->withCounts;
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

        if (isset($map['repositoryIdentity'])) {
            $model->repositoryIdentity = $map['repositoryIdentity'];
        }

        if (isset($map['search'])) {
            $model->search = $map['search'];
        }

        if (isset($map['sort'])) {
            $model->sort = $map['sort'];
        }

        if (isset($map['withCounts'])) {
            $model->withCounts = $map['withCounts'];
        }

        return $model;
    }
}
