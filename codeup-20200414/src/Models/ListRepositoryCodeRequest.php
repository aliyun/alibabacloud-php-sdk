<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models;

use AlibabaCloud\SDK\Codeup\V20200414\Models\ListRepositoryCodeRequest\filePath;
use AlibabaCloud\SDK\Codeup\V20200414\Models\ListRepositoryCodeRequest\repositoryPath;
use AlibabaCloud\Tea\Model;

class ListRepositoryCodeRequest extends Model
{
    /**
     * @var string
     */
    public $organizationId;

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
    public $keyWord;

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
     * @var repositoryPath
     */
    public $repositoryPath;

    /**
     * @var string
     */
    public $scope;

    /**
     * @var string
     */
    public $sort;
    protected $_name = [
        'organizationId' => 'OrganizationId',
        'filePath'       => 'FilePath',
        'isCodeBlock'    => 'IsCodeBlock',
        'keyWord'        => 'KeyWord',
        'language'       => 'Language',
        'order'          => 'Order',
        'page'           => 'Page',
        'pageSize'       => 'PageSize',
        'repositoryPath' => 'RepositoryPath',
        'scope'          => 'Scope',
        'sort'           => 'Sort',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
        }
        if (null !== $this->filePath) {
            $res['FilePath'] = null !== $this->filePath ? $this->filePath->toMap() : null;
        }
        if (null !== $this->isCodeBlock) {
            $res['IsCodeBlock'] = $this->isCodeBlock;
        }
        if (null !== $this->keyWord) {
            $res['KeyWord'] = $this->keyWord;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->repositoryPath) {
            $res['RepositoryPath'] = null !== $this->repositoryPath ? $this->repositoryPath->toMap() : null;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }
        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRepositoryCodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }
        if (isset($map['FilePath'])) {
            $model->filePath = filePath::fromMap($map['FilePath']);
        }
        if (isset($map['IsCodeBlock'])) {
            $model->isCodeBlock = $map['IsCodeBlock'];
        }
        if (isset($map['KeyWord'])) {
            $model->keyWord = $map['KeyWord'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RepositoryPath'])) {
            $model->repositoryPath = repositoryPath::fromMap($map['RepositoryPath']);
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }
        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
        }

        return $model;
    }
}
