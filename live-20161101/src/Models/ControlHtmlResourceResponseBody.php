<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class ControlHtmlResourceResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $streamId;
    protected $_name = [
        'requestId' => 'RequestId',
        'streamId'  => 'StreamId',
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
        if (null !== $this->streamId) {
            $res['StreamId'] = $this->streamId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ControlHtmlResourceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StreamId'])) {
            $model->streamId = $map['StreamId'];
        }

        return $model;
    }
}
