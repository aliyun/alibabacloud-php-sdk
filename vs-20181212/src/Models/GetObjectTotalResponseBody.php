<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class GetObjectTotalResponseBody extends Model
{
    /**
     * @var int
     */
    public $objectCount;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'objectCount' => 'ObjectCount',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->objectCount) {
            $res['ObjectCount'] = $this->objectCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetObjectTotalResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ObjectCount'])) {
            $model->objectCount = $map['ObjectCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
