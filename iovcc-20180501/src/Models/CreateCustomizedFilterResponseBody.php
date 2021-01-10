<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class CreateCustomizedFilterResponseBody extends Model
{
    /**
     * @var string
     */
    public $customizedFilterId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'customizedFilterId' => 'CustomizedFilterId',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customizedFilterId) {
            $res['CustomizedFilterId'] = $this->customizedFilterId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['CustomizedFilterId'])) {
            $model->customizedFilterId = $map['CustomizedFilterId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
