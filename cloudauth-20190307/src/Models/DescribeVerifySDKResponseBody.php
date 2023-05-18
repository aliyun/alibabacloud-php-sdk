<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Tea\Model;

class DescribeVerifySDKResponseBody extends Model
{
    /**
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;

    /**
     * @example https://www.xxx.com
     *
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
     * @return DescribeVerifySDKResponseBody
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
