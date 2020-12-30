<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultTimelineResponseBody\mediaAuditResultTimeline;
use AlibabaCloud\Tea\Model;

class GetMediaAuditResultTimelineResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var mediaAuditResultTimeline
     */
    public $mediaAuditResultTimeline;
    protected $_name = [
        'requestId'                => 'RequestId',
        'mediaAuditResultTimeline' => 'MediaAuditResultTimeline',
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
        if (null !== $this->mediaAuditResultTimeline) {
            $res['MediaAuditResultTimeline'] = null !== $this->mediaAuditResultTimeline ? $this->mediaAuditResultTimeline->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MediaAuditResultTimeline'])) {
            $model->mediaAuditResultTimeline = mediaAuditResultTimeline::fromMap($map['MediaAuditResultTimeline']);
        }

        return $model;
    }
}
