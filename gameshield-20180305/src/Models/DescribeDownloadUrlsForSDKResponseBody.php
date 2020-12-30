<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models;

use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeDownloadUrlsForSDKResponseBody\urlResult;
use AlibabaCloud\Tea\Model;

class DescribeDownloadUrlsForSDKResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var mixed[]
     */
    public $promptInfo;

    /**
     * @var urlResult
     */
    public $urlResult;
    protected $_name = [
        'requestId'  => 'RequestId',
        'promptInfo' => 'PromptInfo',
        'urlResult'  => 'UrlResult',
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
        if (null !== $this->promptInfo) {
            $res['PromptInfo'] = $this->promptInfo;
        }
        if (null !== $this->urlResult) {
            $res['UrlResult'] = null !== $this->urlResult ? $this->urlResult->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDownloadUrlsForSDKResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PromptInfo'])) {
            $model->promptInfo = $map['PromptInfo'];
        }
        if (isset($map['UrlResult'])) {
            $model->urlResult = urlResult::fromMap($map['UrlResult']);
        }

        return $model;
    }
}
