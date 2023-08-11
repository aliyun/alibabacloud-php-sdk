<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class GetTensorboardSharedUrlResponseBody extends Model
{
    /**
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;

    /**
     * @example http://pai-dlc-proxy-xxx.alicyuncs.com/xxx/xxx/token/
     *
     * @var string
     */
    public $tensorboardSharedUrl;
    protected $_name = [
        'requestId'            => 'RequestId',
        'tensorboardSharedUrl' => 'TensorboardSharedUrl',
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
        if (null !== $this->tensorboardSharedUrl) {
            $res['TensorboardSharedUrl'] = $this->tensorboardSharedUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTensorboardSharedUrlResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TensorboardSharedUrl'])) {
            $model->tensorboardSharedUrl = $map['TensorboardSharedUrl'];
        }

        return $model;
    }
}
