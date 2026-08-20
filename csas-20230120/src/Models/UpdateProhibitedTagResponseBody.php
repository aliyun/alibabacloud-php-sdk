<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateProhibitedTagResponseBody\tag;

class UpdateProhibitedTagResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var tag
     */
    public $tag;
    protected $_name = [
        'requestId' => 'RequestId',
        'tag' => 'Tag',
    ];

    public function validate()
    {
        if (null !== $this->tag) {
            $this->tag->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->tag) {
            $res['Tag'] = null !== $this->tag ? $this->tag->toArray($noStream) : $this->tag;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Tag'])) {
            $model->tag = tag::fromMap($map['Tag']);
        }

        return $model;
    }
}
