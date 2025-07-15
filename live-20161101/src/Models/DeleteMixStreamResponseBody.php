<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DeleteMixStreamResponseBody extends Model
{
    /**
     * @description The ID of the stream mixing task.
     *
     * @example 749b7594-86d6-37b1-513b-e1e19845****
     *
     * @var string
     */
    public $mixStreamId;

    /**
     * @description The ID of the request.
     *
     * @example BE9407FF-F897-4DBD-338D-98A750AD805F
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
     * @return DeleteMixStreamResponseBody
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
