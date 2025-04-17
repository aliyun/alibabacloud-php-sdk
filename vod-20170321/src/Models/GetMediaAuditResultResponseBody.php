<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultResponseBody\mediaAuditResult;

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
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->mediaAuditResult) {
            $this->mediaAuditResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mediaAuditResult) {
            $res['MediaAuditResult'] = null !== $this->mediaAuditResult ? $this->mediaAuditResult->toArray($noStream) : $this->mediaAuditResult;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
