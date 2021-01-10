<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\ListCustomPersonsResponseBody\categories;
use AlibabaCloud\Tea\Model;

class ListCustomPersonsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var categories
     */
    public $categories;
    protected $_name = [
        'requestId'  => 'RequestId',
        'categories' => 'Categories',
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
        if (null !== $this->categories) {
            $res['Categories'] = null !== $this->categories ? $this->categories->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Categories'])) {
            $model->categories = categories::fromMap($map['Categories']);
        }

        return $model;
    }
}
