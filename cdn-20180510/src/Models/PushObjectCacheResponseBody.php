<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class PushObjectCacheResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $pushTaskId;
    protected $_name = [
        'requestId'  => 'RequestId',
        'pushTaskId' => 'PushTaskId',
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
        if (null !== $this->pushTaskId) {
            $res['PushTaskId'] = $this->pushTaskId;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PushTaskId'])) {
            $model->pushTaskId = $map['PushTaskId'];
        }

        return $model;
    }
}
