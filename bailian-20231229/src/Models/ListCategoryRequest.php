<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Dara\Model;

class ListCategoryRequest extends Model
{
    /**
     * @var string
     */
    public $categoryName;

    /**
     * @var string
     */
    public $categoryType;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $parentCategoryId;
    protected $_name = [
        'categoryName' => 'CategoryName',
        'categoryType' => 'CategoryType',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'parentCategoryId' => 'ParentCategoryId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->categoryName) {
            $res['CategoryName'] = $this->categoryName;
        }

        if (null !== $this->categoryType) {
            $res['CategoryType'] = $this->categoryType;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->parentCategoryId) {
            $res['ParentCategoryId'] = $this->parentCategoryId;
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
        if (isset($map['CategoryName'])) {
            $model->categoryName = $map['CategoryName'];
        }

        if (isset($map['CategoryType'])) {
            $model->categoryType = $map['CategoryType'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['ParentCategoryId'])) {
            $model->parentCategoryId = $map['ParentCategoryId'];
        }

        return $model;
    }
}
