<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20180528\Models;

use AlibabaCloud\Tea\Model;

class CategoryTreeResponseBody extends Model
{
    /**
     * @var string
     */
    public $categoryTree;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'categoryTree' => 'CategoryTree',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categoryTree) {
            $res['CategoryTree'] = $this->categoryTree;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CategoryTreeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CategoryTree'])) {
            $model->categoryTree = $map['CategoryTree'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
