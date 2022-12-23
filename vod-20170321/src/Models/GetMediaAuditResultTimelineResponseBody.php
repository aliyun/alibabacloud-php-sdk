<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultTimelineResponseBody\mediaAuditResultTimeline;
use AlibabaCloud\Tea\Model;

class GetMediaAuditResultTimelineResponseBody extends Model
{
    /**
     * @description The collection of review result timelines.
     *
     * @var mediaAuditResultTimeline
     */
    public $mediaAuditResultTimeline;

    /**
     * @description The ID of the request.
     *
     * @example 6438BD76-D523-46FC-956F-****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'mediaAuditResultTimeline' => 'MediaAuditResultTimeline',
        'requestId'                => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaAuditResultTimeline) {
            $res['MediaAuditResultTimeline'] = null !== $this->mediaAuditResultTimeline ? $this->mediaAuditResultTimeline->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMediaAuditResultTimelineResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaAuditResultTimeline'])) {
            $model->mediaAuditResultTimeline = mediaAuditResultTimeline::fromMap($map['MediaAuditResultTimeline']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
