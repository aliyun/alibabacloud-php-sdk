<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\Tea\Model;

class CategoryTreeResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $categoryTree;
    protected $_name = [
        'requestId'    => 'RequestId',
        'categoryTree' => 'CategoryTree',
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
        if (null !== $this->categoryTree) {
            $res['CategoryTree'] = $this->categoryTree;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CategoryTree'])) {
            $model->categoryTree = $map['CategoryTree'];
        }

        return $model;
    }
}
