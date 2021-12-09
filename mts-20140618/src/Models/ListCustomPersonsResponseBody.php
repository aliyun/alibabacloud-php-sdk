<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\ListCustomPersonsResponseBody\categories;
use AlibabaCloud\Tea\Model;

class ListCustomPersonsResponseBody extends Model
{
    /**
     * @var categories
     */
    public $categories;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'categories' => 'Categories',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categories) {
            $res['Categories'] = null !== $this->categories ? $this->categories->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCustomPersonsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Categories'])) {
            $model->categories = categories::fromMap($map['Categories']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
