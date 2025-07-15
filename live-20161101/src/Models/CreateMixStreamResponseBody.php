<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class CreateMixStreamResponseBody extends Model
{
    /**
     * @description The ID of the stream mixing task. You can specify this parameter in a request to delete the stream mixing task or query stream mixing tasks.
     *
     * @example 5b2a046e-74d7-385e-253f-8a5b87e4****
     *
     * @var string
     */
    public $mixStreamId;

    /**
     * @description The ID of the request.
     *
     * @example 0D715397-2E66-4AE1-694h-C546628AD145
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'mixStreamId' => 'MixStreamId',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->mixStreamId) {
            $res['MixStreamId'] = $this->mixStreamId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMixStreamResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MixStreamId'])) {
            $model->mixStreamId = $map['MixStreamId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
