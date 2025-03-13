<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\SDK\Devops\V20210625\Models\ListSearchSourceCodeRequest\filePath;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListSearchSourceCodeRequest\repoPath;
use AlibabaCloud\Tea\Model;

class ListSearchSourceCodeRequest extends Model
{
    /**
     * @var filePath
     */
    public $filePath;

    /**
     * @example false
     *
     * @var bool
     */
    public $isCodeBlock;

    /**
     * @description This parameter is required.
     *
     * @example test
     *
     * @var string
     */
    public $keyword;

    /**
     * @example Java
     *
     * @var string
     */
    public $language;

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
     * @example 20
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
     * @description This parameter is required.
     *
     * @example 66c0c9fffeb86b450c199fcd
     *
     * @var string
     */
    public $organizationId;
    protected $_name = [
        'filePath'       => 'filePath',
        'isCodeBlock'    => 'isCodeBlock',
        'keyword'        => 'keyword',
        'language'       => 'language',
        'order'          => 'order',
        'page'           => 'page',
        'pageSize'       => 'pageSize',
        'repoPath'       => 'repoPath',
        'scope'          => 'scope',
        'sort'           => 'sort',
        'organizationId' => 'organizationId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->filePath) {
            $res['filePath'] = null !== $this->filePath ? $this->filePath->toMap() : null;
        }
        if (null !== $this->isCodeBlock) {
            $res['isCodeBlock'] = $this->isCodeBlock;
        }
        if (null !== $this->keyword) {
            $res['keyword'] = $this->keyword;
        }
        if (null !== $this->language) {
            $res['language'] = $this->language;
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
        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSearchSourceCodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['filePath'])) {
            $model->filePath = filePath::fromMap($map['filePath']);
        }
        if (isset($map['isCodeBlock'])) {
            $model->isCodeBlock = $map['isCodeBlock'];
        }
        if (isset($map['keyword'])) {
            $model->keyword = $map['keyword'];
        }
        if (isset($map['language'])) {
            $model->language = $map['language'];
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
        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }

        return $model;
    }
}
