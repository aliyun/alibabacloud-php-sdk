<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitAIVideoSummaryJobResponseBody\AIVideoSummaryJob;

class SubmitAIVideoSummaryJobResponseBody extends Model
{
    /**
     * @var AIVideoSummaryJob
     */
    public $AIVideoSummaryJob;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'AIVideoSummaryJob' => 'AIVideoSummaryJob',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->AIVideoSummaryJob) {
            $this->AIVideoSummaryJob->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AIVideoSummaryJob) {
            $res['AIVideoSummaryJob'] = null !== $this->AIVideoSummaryJob ? $this->AIVideoSummaryJob->toArray($noStream) : $this->AIVideoSummaryJob;
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
        if (isset($map['AIVideoSummaryJob'])) {
            $model->AIVideoSummaryJob = AIVideoSummaryJob::fromMap($map['AIVideoSummaryJob']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
