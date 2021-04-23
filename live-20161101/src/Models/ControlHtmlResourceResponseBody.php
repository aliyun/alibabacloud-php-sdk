<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class ControlHtmlResourceResponseBody extends Model
{
    /**
     * @var string
     */
    public $streamId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'streamId'  => 'StreamId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->streamId) {
            $res['StreamId'] = $this->streamId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['StreamId'])) {
            $model->streamId = $map['StreamId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
