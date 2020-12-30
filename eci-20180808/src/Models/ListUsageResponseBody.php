<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models;

use AlibabaCloud\Tea\Model;

class ListUsageResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var mixed[]
     */
    public $attributes;
    protected $_name = [
        'requestId'  => 'RequestId',
        'attributes' => 'Attributes',
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
        if (null !== $this->attributes) {
            $res['Attributes'] = $this->attributes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUsageResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Attributes'])) {
            $model->attributes = $map['Attributes'];
        }

        return $model;
    }
}
