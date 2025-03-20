<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class PreloadVodObjectCachesResponseBody extends Model
{
    /**
     * @description The ID of the prefetch task. Separate multiple task IDs with commas (,).
     *
     * @example 9524****
     *
     * @var string
     */
    public $preloadTaskId;

    /**
     * @description The ID of the request.
     *
     * @example E5BD4B50-7A02-493A-*****-97B9024B4135
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'preloadTaskId' => 'PreloadTaskId',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->preloadTaskId) {
            $res['PreloadTaskId'] = $this->preloadTaskId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PreloadVodObjectCachesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PreloadTaskId'])) {
            $model->preloadTaskId = $map['PreloadTaskId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
