<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class QueryKnowledgesRequest extends Model
{
    /**
     * @var string
     */
    public $knowledgeTitle;

    /**
     * @var string
     */
    public $coreWordName;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $categoryId;
    protected $_name = [
        'knowledgeTitle' => 'KnowledgeTitle',
        'coreWordName'   => 'CoreWordName',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'categoryId'     => 'CategoryId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->knowledgeTitle) {
            $res['KnowledgeTitle'] = $this->knowledgeTitle;
        }
        if (null !== $this->coreWordName) {
            $res['CoreWordName'] = $this->coreWordName;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryKnowledgesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KnowledgeTitle'])) {
            $model->knowledgeTitle = $map['KnowledgeTitle'];
        }
        if (isset($map['CoreWordName'])) {
            $model->coreWordName = $map['CoreWordName'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }

        return $model;
    }
}
