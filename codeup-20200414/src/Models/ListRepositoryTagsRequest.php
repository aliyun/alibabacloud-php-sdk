<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models;

use AlibabaCloud\Tea\Model;

class ListRepositoryTagsRequest extends Model
{
    /**
     * @var string
     */
    public $accessToken;

    /**
     * @var string
     */
    public $search;

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
    public $sort;

    /**
     * @var bool
     */
    public $showSignature;
    protected $_name = [
        'accessToken'    => 'AccessToken',
        'search'         => 'Search',
        'organizationId' => 'OrganizationId',
        'page'           => 'Page',
        'pageSize'       => 'PageSize',
        'sort'           => 'Sort',
        'showSignature'  => 'ShowSignature',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['AccessToken'] = $this->accessToken;
        }
        if (null !== $this->search) {
            $res['Search'] = $this->search;
        }
        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
        }
        if (null !== $this->showSignature) {
            $res['ShowSignature'] = $this->showSignature;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRepositoryTagsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessToken'])) {
            $model->accessToken = $map['AccessToken'];
        }
        if (isset($map['Search'])) {
            $model->search = $map['Search'];
        }
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
        }
        if (isset($map['ShowSignature'])) {
            $model->showSignature = $map['ShowSignature'];
        }

        return $model;
    }
}
