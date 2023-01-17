<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scdn\V20171115\Models;

use AlibabaCloud\Tea\Model;

class PreloadScdnObjectCachesResponseBody extends Model
{
    /**
     * @example 9524****
     *
     * @var string
     */
    public $preloadTaskId;

    /**
     * @example E5BD4B50-7A02-493A-AE0B-97B9024B413
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'preloadTaskId' => 'PreloadTaskId',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

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
     * @return PreloadScdnObjectCachesResponseBody
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
