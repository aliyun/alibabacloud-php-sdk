<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class ListRepositoryCommitsRequest extends Model
{
    /**
     * @var string
     */
    public $accessToken;

    /**
     * @var string
     */
    public $end;

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
    public $path;

    /**
     * @var string
     */
    public $refName;

    /**
     * @var string
     */
    public $search;

    /**
     * @var bool
     */
    public $showCommentsCount;

    /**
     * @var bool
     */
    public $showSignature;

    /**
     * @var string
     */
    public $start;
    protected $_name = [
        'accessToken'       => 'accessToken',
        'end'               => 'end',
        'organizationId'    => 'organizationId',
        'page'              => 'page',
        'pageSize'          => 'pageSize',
        'path'              => 'path',
        'refName'           => 'refName',
        'search'            => 'search',
        'showCommentsCount' => 'showCommentsCount',
        'showSignature'     => 'showSignature',
        'start'             => 'start',
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
        if (null !== $this->end) {
            $res['end'] = $this->end;
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
        if (null !== $this->path) {
            $res['path'] = $this->path;
        }
        if (null !== $this->refName) {
            $res['refName'] = $this->refName;
        }
        if (null !== $this->search) {
            $res['search'] = $this->search;
        }
        if (null !== $this->showCommentsCount) {
            $res['showCommentsCount'] = $this->showCommentsCount;
        }
        if (null !== $this->showSignature) {
            $res['showSignature'] = $this->showSignature;
        }
        if (null !== $this->start) {
            $res['start'] = $this->start;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRepositoryCommitsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accessToken'])) {
            $model->accessToken = $map['accessToken'];
        }
        if (isset($map['end'])) {
            $model->end = $map['end'];
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
        if (isset($map['path'])) {
            $model->path = $map['path'];
        }
        if (isset($map['refName'])) {
            $model->refName = $map['refName'];
        }
        if (isset($map['search'])) {
            $model->search = $map['search'];
        }
        if (isset($map['showCommentsCount'])) {
            $model->showCommentsCount = $map['showCommentsCount'];
        }
        if (isset($map['showSignature'])) {
            $model->showSignature = $map['showSignature'];
        }
        if (isset($map['start'])) {
            $model->start = $map['start'];
        }

        return $model;
    }
}
