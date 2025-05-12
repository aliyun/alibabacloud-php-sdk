<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitAnalysisJobResponseBody\analysisJob;

class SubmitAnalysisJobResponseBody extends Model
{
    /**
     * @var analysisJob
     */
    public $analysisJob;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'analysisJob' => 'AnalysisJob',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->analysisJob) {
            $this->analysisJob->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->analysisJob) {
            $res['AnalysisJob'] = null !== $this->analysisJob ? $this->analysisJob->toArray($noStream) : $this->analysisJob;
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
        if (isset($map['AnalysisJob'])) {
            $model->analysisJob = analysisJob::fromMap($map['AnalysisJob']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
