<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\AddCategoryResponseBody\category;
use AlibabaCloud\Tea\Model;

class AddCategoryResponseBody extends Model
{
    /**
     * @description The information about the category.
     *
     * @var category
     */
    public $category;

    /**
     * @description The request ID.
     *
     * @example ****63E8B7C7-4812-46AD-0FA56029AC86****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'category'  => 'Category',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = null !== $this->category ? $this->category->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddCategoryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = category::fromMap($map['Category']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
