<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\SDK\Devops\V20210625\Models\ListSearchRepositoryRequest\repoPath;
use AlibabaCloud\Tea\Model;

class ListSearchRepositoryRequest extends Model
{
    /**
     * @example 1840004904455497
     *
     * @var string
     */
    public $aliyunPk;

    /**
     * @example test
     *
     * @var string
     */
    public $keyword;

    /**
     * @example default
     *
     * @var string
     */
    public $order;

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
     * @var repoPath
     */
    public $repoPath;

    /**
     * @example all
     *
     * @var string
     */
    public $scope;

    /**
     * @example desc
     *
     * @var string
     */
    public $sort;

    /**
     * @example 0
     *
     * @var int
     */
    public $visibilityLevel;

    /**
     * @example 61e54b0e0bb300d827e1ae27
     *
     * @var string
     */
    public $organizationId;
    protected $_name = [
        'aliyunPk'        => 'aliyunPk',
        'keyword'         => 'keyword',
        'order'           => 'order',
        'page'            => 'page',
        'pageSize'        => 'pageSize',
        'repoPath'        => 'repoPath',
        'scope'           => 'scope',
        'sort'            => 'sort',
        'visibilityLevel' => 'visibilityLevel',
        'organizationId'  => 'organizationId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunPk) {
            $res['aliyunPk'] = $this->aliyunPk;
        }
        if (null !== $this->keyword) {
            $res['keyword'] = $this->keyword;
        }
        if (null !== $this->order) {
            $res['order'] = $this->order;
        }
        if (null !== $this->page) {
            $res['page'] = $this->page;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->repoPath) {
            $res['repoPath'] = null !== $this->repoPath ? $this->repoPath->toMap() : null;
        }
        if (null !== $this->scope) {
            $res['scope'] = $this->scope;
        }
        if (null !== $this->sort) {
            $res['sort'] = $this->sort;
        }
        if (null !== $this->visibilityLevel) {
            $res['visibilityLevel'] = $this->visibilityLevel;
        }
        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSearchRepositoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['aliyunPk'])) {
            $model->aliyunPk = $map['aliyunPk'];
        }
        if (isset($map['keyword'])) {
            $model->keyword = $map['keyword'];
        }
        if (isset($map['order'])) {
            $model->order = $map['order'];
        }
        if (isset($map['page'])) {
            $model->page = $map['page'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['repoPath'])) {
            $model->repoPath = repoPath::fromMap($map['repoPath']);
        }
        if (isset($map['scope'])) {
            $model->scope = $map['scope'];
        }
        if (isset($map['sort'])) {
            $model->sort = $map['sort'];
        }
        if (isset($map['visibilityLevel'])) {
            $model->visibilityLevel = $map['visibilityLevel'];
        }
        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }

        return $model;
    }
}
