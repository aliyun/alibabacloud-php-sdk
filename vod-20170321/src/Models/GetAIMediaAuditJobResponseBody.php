<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponseBody\mediaAuditJob;
use AlibabaCloud\Tea\Model;

class GetAIMediaAuditJobResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var mediaAuditJob
     */
    public $mediaAuditJob;
    protected $_name = [
        'requestId'     => 'RequestId',
        'mediaAuditJob' => 'MediaAuditJob',
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
        if (null !== $this->mediaAuditJob) {
            $res['MediaAuditJob'] = null !== $this->mediaAuditJob ? $this->mediaAuditJob->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAIMediaAuditJobResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MediaAuditJob'])) {
            $model->mediaAuditJob = mediaAuditJob::fromMap($map['MediaAuditJob']);
        }

        return $model;
    }
}
