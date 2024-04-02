<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\Tea\Model;

class DescribeSdkUrlResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $sdkUrl;
    protected $_name = [
        'requestId' => 'RequestId',
        'sdkUrl'    => 'SdkUrl',
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
        if (null !== $this->sdkUrl) {
            $res['SdkUrl'] = $this->sdkUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSdkUrlResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SdkUrl'])) {
            $model->sdkUrl = $map['SdkUrl'];
        }

        return $model;
    }
}
