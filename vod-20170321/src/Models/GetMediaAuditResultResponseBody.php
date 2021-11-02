<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultResponseBody\mediaAuditResult;
use AlibabaCloud\Tea\Model;

class GetMediaAuditResultResponseBody extends Model
{
    /**
     * @var mediaAuditResult
     */
    public $mediaAuditResult;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'mediaAuditResult' => 'MediaAuditResult',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaAuditResult) {
            $res['MediaAuditResult'] = null !== $this->mediaAuditResult ? $this->mediaAuditResult->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMediaAuditResultResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaAuditResult'])) {
            $model->mediaAuditResult = mediaAuditResult::fromMap($map['MediaAuditResult']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
