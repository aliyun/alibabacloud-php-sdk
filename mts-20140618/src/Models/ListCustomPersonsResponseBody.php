<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListCustomPersonsResponseBody\categories;

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
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->categories) {
            $this->categories->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->categories) {
            $res['Categories'] = null !== $this->categories ? $this->categories->toArray($noStream) : $this->categories;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Categories'])) {
            $model->categories = categories::fromMap($map['Categories']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
