<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\GenerateSdkDownloadInfoResponseBody\sdkDownloadInfo;
use AlibabaCloud\Tea\Model;

class GenerateSdkDownloadInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var sdkDownloadInfo
     */
    public $sdkDownloadInfo;
    protected $_name = [
        'requestId'       => 'RequestId',
        'sdkDownloadInfo' => 'SdkDownloadInfo',
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
        if (null !== $this->sdkDownloadInfo) {
            $res['SdkDownloadInfo'] = null !== $this->sdkDownloadInfo ? $this->sdkDownloadInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateSdkDownloadInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SdkDownloadInfo'])) {
            $model->sdkDownloadInfo = sdkDownloadInfo::fromMap($map['SdkDownloadInfo']);
        }

        return $model;
    }
}
