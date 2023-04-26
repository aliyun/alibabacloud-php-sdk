<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponseBody\mediaAuditJob;
use AlibabaCloud\Tea\Model;

class GetAIMediaAuditJobResponseBody extends Model
{
    /**
     * @description The average score of the images of the category that is indicated by Label. Valid values: `[0, 100]`. The value is accurate to 10 decimal places. The score is representative of the confidence.
     *
     * @var mediaAuditJob
     */
    public $mediaAuditJob;

    /**
     * @description The highest review score.
     *
     * @example EAA3E96A-02E2-41*****85-08E1D568ED3A
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'mediaAuditJob' => 'MediaAuditJob',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaAuditJob) {
            $res['MediaAuditJob'] = null !== $this->mediaAuditJob ? $this->mediaAuditJob->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['MediaAuditJob'])) {
            $model->mediaAuditJob = mediaAuditJob::fromMap($map['MediaAuditJob']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
