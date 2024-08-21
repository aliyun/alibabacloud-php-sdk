<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Tea\Model;

class CreateMemoryResponseBody extends Model
{
    /**
     * @example 6bff4f317a14442fbc9f73d29dbd5fc3
     *
     * @var string
     */
    public $memoryId;

    /**
     * @example 6a71f2d9-f1c9-913b-818b-114029103cad
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'memoryId'  => 'memoryId',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->memoryId) {
            $res['memoryId'] = $this->memoryId;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMemoryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['memoryId'])) {
            $model->memoryId = $map['memoryId'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
