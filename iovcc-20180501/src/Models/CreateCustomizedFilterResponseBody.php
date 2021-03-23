<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class CreateCustomizedFilterResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $customizedFilterId;
    protected $_name = [
        'requestId'          => 'RequestId',
        'customizedFilterId' => 'CustomizedFilterId',
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
        if (null !== $this->customizedFilterId) {
            $res['CustomizedFilterId'] = $this->customizedFilterId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCustomizedFilterResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CustomizedFilterId'])) {
            $model->customizedFilterId = $map['CustomizedFilterId'];
        }

        return $model;
    }
}
