<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditAudioResultDetailResponseBody\mediaAuditAudioResultDetail;
use AlibabaCloud\Tea\Model;

class GetMediaAuditAudioResultDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var mediaAuditAudioResultDetail
     */
    public $mediaAuditAudioResultDetail;
    protected $_name = [
        'requestId'                   => 'RequestId',
        'mediaAuditAudioResultDetail' => 'MediaAuditAudioResultDetail',
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
        if (null !== $this->mediaAuditAudioResultDetail) {
            $res['MediaAuditAudioResultDetail'] = null !== $this->mediaAuditAudioResultDetail ? $this->mediaAuditAudioResultDetail->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMediaAuditAudioResultDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MediaAuditAudioResultDetail'])) {
            $model->mediaAuditAudioResultDetail = mediaAuditAudioResultDetail::fromMap($map['MediaAuditAudioResultDetail']);
        }

        return $model;
    }
}
