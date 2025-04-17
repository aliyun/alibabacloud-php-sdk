<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditAudioResultDetailResponseBody\mediaAuditAudioResultDetail;

class GetMediaAuditAudioResultDetailResponseBody extends Model
{
    /**
     * @var mediaAuditAudioResultDetail
     */
    public $mediaAuditAudioResultDetail;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'mediaAuditAudioResultDetail' => 'MediaAuditAudioResultDetail',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->mediaAuditAudioResultDetail) {
            $this->mediaAuditAudioResultDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mediaAuditAudioResultDetail) {
            $res['MediaAuditAudioResultDetail'] = null !== $this->mediaAuditAudioResultDetail ? $this->mediaAuditAudioResultDetail->toArray($noStream) : $this->mediaAuditAudioResultDetail;
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
        if (isset($map['MediaAuditAudioResultDetail'])) {
            $model->mediaAuditAudioResultDetail = mediaAuditAudioResultDetail::fromMap($map['MediaAuditAudioResultDetail']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
