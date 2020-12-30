<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models;

use AlibabaCloud\SDK\Gameshield\V20180305\Models\DownloadAppKeyFileResponseBody\downloadLinkResult;
use AlibabaCloud\Tea\Model;

class DownloadAppKeyFileResponseBody extends Model
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
     * @var downloadLinkResult
     */
    public $downloadLinkResult;
    protected $_name = [
        'requestId'          => 'RequestId',
        'promptInfo'         => 'PromptInfo',
        'downloadLinkResult' => 'DownloadLinkResult',
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
        if (null !== $this->downloadLinkResult) {
            $res['DownloadLinkResult'] = null !== $this->downloadLinkResult ? $this->downloadLinkResult->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DownloadAppKeyFileResponseBody
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
        if (isset($map['DownloadLinkResult'])) {
            $model->downloadLinkResult = downloadLinkResult::fromMap($map['DownloadLinkResult']);
        }

        return $model;
    }
}
