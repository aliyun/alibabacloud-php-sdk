<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class DescribeServiceSignedUrlResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @example 40325405-579C-4D82****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The service URL.
     *
     * @example https://foo-115**.console.cn-hangzhou.eas.pai-ml.com?expire=1735202661&signature=ey*******
     *
     * @var string
     */
    public $signedUrl;
    protected $_name = [
        'requestId' => 'RequestId',
        'signedUrl' => 'SignedUrl',
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
        if (null !== $this->signedUrl) {
            $res['SignedUrl'] = $this->signedUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeServiceSignedUrlResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SignedUrl'])) {
            $model->signedUrl = $map['SignedUrl'];
        }

        return $model;
    }
}
