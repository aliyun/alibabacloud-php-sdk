<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class CreatePrivateAccessTagResponseBody extends Model
{
    /**
     * @example 102350E7-1A20-58F5-9D63-ABEA820AE6E1
     *
     * @var string
     */
    public $requestId;

    /**
     * @example tag-d3f64e8bdd4a****
     *
     * @var string
     */
    public $tagId;
    protected $_name = [
        'requestId' => 'RequestId',
        'tagId'     => 'TagId',
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
        if (null !== $this->tagId) {
            $res['TagId'] = $this->tagId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePrivateAccessTagResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TagId'])) {
            $model->tagId = $map['TagId'];
        }

        return $model;
    }
}
