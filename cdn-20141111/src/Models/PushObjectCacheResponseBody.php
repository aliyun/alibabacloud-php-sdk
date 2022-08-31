<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20141111\Models;

use AlibabaCloud\Tea\Model;

class PushObjectCacheResponseBody extends Model
{
    /**
     * @var string
     */
    public $pushTaskId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'pushTaskId' => 'PushTaskId',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pushTaskId) {
            $res['PushTaskId'] = $this->pushTaskId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PushObjectCacheResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PushTaskId'])) {
            $model->pushTaskId = $map['PushTaskId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
