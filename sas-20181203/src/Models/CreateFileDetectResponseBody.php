<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class CreateFileDetectResponseBody extends Model
{
    /**
     * @var string
     */
    public $hashKey;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'hashKey'   => 'HashKey',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hashKey) {
            $res['HashKey'] = $this->hashKey;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFileDetectResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HashKey'])) {
            $model->hashKey = $map['HashKey'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
