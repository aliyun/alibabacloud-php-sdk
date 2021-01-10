<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\ListAllCategoryResponseBody\categoryList;
use AlibabaCloud\Tea\Model;

class ListAllCategoryResponseBody extends Model
{
    /**
     * @var categoryList
     */
    public $categoryList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'categoryList' => 'CategoryList',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categoryList) {
            $res['CategoryList'] = null !== $this->categoryList ? $this->categoryList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAllCategoryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CategoryList'])) {
            $model->categoryList = categoryList::fromMap($map['CategoryList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
