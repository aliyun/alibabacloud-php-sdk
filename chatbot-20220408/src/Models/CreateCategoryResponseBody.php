<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\SDK\Chatbot\V20220408\Models\CreateCategoryResponseBody\category;
use AlibabaCloud\Tea\Model;

class CreateCategoryResponseBody extends Model
{
    /**
     * @var category
     */
    public $category;

    /**
     * @example A629A28F-F25E-5572-A679-FA46FB0151D6
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
     * @return CreateCategoryResponseBody
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
