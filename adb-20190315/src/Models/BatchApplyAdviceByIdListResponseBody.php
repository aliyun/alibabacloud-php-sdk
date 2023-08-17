<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Tea\Model;

class BatchApplyAdviceByIdListResponseBody extends Model
{
    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $message;

    /**
     * @example 86F92D26-B774-5FA1-8E53-82CBEEEBB012
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'message'   => 'Message',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchApplyAdviceByIdListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
