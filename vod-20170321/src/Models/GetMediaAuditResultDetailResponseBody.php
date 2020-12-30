<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultDetailResponseBody\mediaAuditResultDetail;
use AlibabaCloud\Tea\Model;

class GetMediaAuditResultDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var mediaAuditResultDetail
     */
    public $mediaAuditResultDetail;
    protected $_name = [
        'requestId'              => 'RequestId',
        'mediaAuditResultDetail' => 'MediaAuditResultDetail',
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
        if (null !== $this->mediaAuditResultDetail) {
            $res['MediaAuditResultDetail'] = null !== $this->mediaAuditResultDetail ? $this->mediaAuditResultDetail->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMediaAuditResultDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MediaAuditResultDetail'])) {
            $model->mediaAuditResultDetail = mediaAuditResultDetail::fromMap($map['MediaAuditResultDetail']);
        }

        return $model;
    }
}
