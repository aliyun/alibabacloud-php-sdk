<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultDetailResponseBody\mediaAuditResultDetail;

class GetMediaAuditResultDetailResponseBody extends Model
{
    /**
     * @var mediaAuditResultDetail
     */
    public $mediaAuditResultDetail;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'mediaAuditResultDetail' => 'MediaAuditResultDetail',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->mediaAuditResultDetail) {
            $this->mediaAuditResultDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mediaAuditResultDetail) {
            $res['MediaAuditResultDetail'] = null !== $this->mediaAuditResultDetail ? $this->mediaAuditResultDetail->toArray($noStream) : $this->mediaAuditResultDetail;
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
        if (isset($map['MediaAuditResultDetail'])) {
            $model->mediaAuditResultDetail = mediaAuditResultDetail::fromMap($map['MediaAuditResultDetail']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
