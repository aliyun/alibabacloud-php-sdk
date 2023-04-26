<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultDetailResponseBody\mediaAuditResultDetail;
use AlibabaCloud\Tea\Model;

class GetMediaAuditResultDetailResponseBody extends Model
{
    /**
     * @description The total number of snapshots returned.
     *
     * @var mediaAuditResultDetail
     */
    public $mediaAuditResultDetail;

    /**
     * @description The category of the terrorist content review result.
     *
     *   **normal**: normal
     *   **terrorism**: terrorist content
     *   **outfit**: special costume
     *   **logo**: special logo
     *   **weapon**: weapon
     *   **politics**: politically sensitive content
     *   **others**: other terrorist content and politically sensitive content
     *
     * @example 6438BD76-D523-46FC-956F-****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'mediaAuditResultDetail' => 'MediaAuditResultDetail',
        'requestId'              => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaAuditResultDetail) {
            $res['MediaAuditResultDetail'] = null !== $this->mediaAuditResultDetail ? $this->mediaAuditResultDetail->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['MediaAuditResultDetail'])) {
            $model->mediaAuditResultDetail = mediaAuditResultDetail::fromMap($map['MediaAuditResultDetail']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
