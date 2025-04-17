<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponseBody\mediaAuditJob;

class GetAIMediaAuditJobResponseBody extends Model
{
    /**
     * @var mediaAuditJob
     */
    public $mediaAuditJob;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'mediaAuditJob' => 'MediaAuditJob',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->mediaAuditJob) {
            $this->mediaAuditJob->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mediaAuditJob) {
            $res['MediaAuditJob'] = null !== $this->mediaAuditJob ? $this->mediaAuditJob->toArray($noStream) : $this->mediaAuditJob;
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
        if (isset($map['MediaAuditJob'])) {
            $model->mediaAuditJob = mediaAuditJob::fromMap($map['MediaAuditJob']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
