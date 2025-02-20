<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListSearchSourceCodeRequest\filePath;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListSearchSourceCodeRequest\repoPath;

class ListSearchSourceCodeRequest extends Model
{
    /**
     * @var filePath
     */
    public $filePath;
    /**
     * @var bool
     */
    public $isCodeBlock;
    /**
     * @var string
     */
    public $keyword;
    /**
     * @var string
     */
    public $language;
    /**
     * @var string
     */
    public $order;
    /**
     * @var int
     */
    public $page;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var repoPath
     */
    public $repoPath;
    /**
     * @var string
     */
    public $scope;
    /**
     * @var string
     */
    public $sort;
    /**
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
        if (null !== $this->filePath) {
            $this->filePath->validate();
        }
        if (null !== $this->repoPath) {
            $this->repoPath->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->filePath) {
            $res['filePath'] = null !== $this->filePath ? $this->filePath->toArray($noStream) : $this->filePath;
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
            $res['repoPath'] = null !== $this->repoPath ? $this->repoPath->toArray($noStream) : $this->repoPath;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
