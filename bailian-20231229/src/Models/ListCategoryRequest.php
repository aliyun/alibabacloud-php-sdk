<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Tea\Model;

class ListCategoryRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example UNSTRUCTURED
     *
     * @var string
     */
    public $categoryType;

    /**
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example AAAAAdH70eOCSCKtacdomNzak4U=
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example cate_cdd11b1b79a74e8bbd675c356a91ee3XXXXXXXX
     *
     * @var string
     */
    public $parentCategoryId;
    protected $_name = [
        'categoryType' => 'CategoryType',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'parentCategoryId' => 'ParentCategoryId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
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

    /**
     * @param array $map
     *
     * @return ListCategoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
