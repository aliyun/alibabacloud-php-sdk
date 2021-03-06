<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models;

use AlibabaCloud\SDK\Gameshield\V20180305\Models\DownloadUserTotalFlowReportResponseBody\downloadFileResult;
use AlibabaCloud\Tea\Model;

class DownloadUserTotalFlowReportResponseBody extends Model
{
    /**
     * @var downloadFileResult
     */
    public $downloadFileResult;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var mixed[]
     */
    public $promptInfo;
    protected $_name = [
        'downloadFileResult' => 'DownloadFileResult',
        'requestId'          => 'RequestId',
        'promptInfo'         => 'PromptInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->downloadFileResult) {
            $res['DownloadFileResult'] = null !== $this->downloadFileResult ? $this->downloadFileResult->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->promptInfo) {
            $res['PromptInfo'] = $this->promptInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DownloadUserTotalFlowReportResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DownloadFileResult'])) {
            $model->downloadFileResult = downloadFileResult::fromMap($map['DownloadFileResult']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PromptInfo'])) {
            $model->promptInfo = $map['PromptInfo'];
        }

        return $model;
    }
}
