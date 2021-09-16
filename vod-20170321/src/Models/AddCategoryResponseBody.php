<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\AddCategoryResponseBody\category;
use AlibabaCloud\Tea\Model;

class AddCategoryResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var category
     */
    public $category;
    protected $_name = [
        'requestId' => 'RequestId',
        'category'  => 'Category',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->category) {
            $res['Category'] = null !== $this->category ? $this->category->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Category'])) {
            $model->category = category::fromMap($map['Category']);
        }

        return $model;
    }
}
