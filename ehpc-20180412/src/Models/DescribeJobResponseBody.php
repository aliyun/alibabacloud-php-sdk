<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeJobResponseBody\message;
use AlibabaCloud\Tea\Model;

class DescribeJobResponseBody extends Model
{
    /**
     * @description The list of returned job information.
     *
     * @var message
     */
    public $message;

    /**
     * @description The ID of the request.
     *
     * @example 9697AD8D-56FA-4C8E-B46C-00AC9***
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
            $res['Message'] = null !== $this->message ? $this->message->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeJobResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = message::fromMap($map['Message']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
