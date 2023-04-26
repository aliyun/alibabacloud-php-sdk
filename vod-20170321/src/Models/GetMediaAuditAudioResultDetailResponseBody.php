<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditAudioResultDetailResponseBody\mediaAuditAudioResultDetail;
use AlibabaCloud\Tea\Model;

class GetMediaAuditAudioResultDetailResponseBody extends Model
{
    /**
     * @description The page number of the returned page.
     *
     * @var mediaAuditAudioResultDetail
     */
    public $mediaAuditAudioResultDetail;

    /**
     * @description The number of the page to return. This parameter is optional. If you do not specify this parameter, all results are returned without pagination.
     *
     * @example CB7D7232-1AB2-40FE-B8D3-****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'mediaAuditAudioResultDetail' => 'MediaAuditAudioResultDetail',
        'requestId'                   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaAuditAudioResultDetail) {
            $res['MediaAuditAudioResultDetail'] = null !== $this->mediaAuditAudioResultDetail ? $this->mediaAuditAudioResultDetail->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['MediaAuditAudioResultDetail'])) {
            $model->mediaAuditAudioResultDetail = mediaAuditAudioResultDetail::fromMap($map['MediaAuditAudioResultDetail']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
