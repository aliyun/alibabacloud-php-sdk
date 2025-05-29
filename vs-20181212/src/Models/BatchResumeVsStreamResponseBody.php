<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchResumeVsStreamResponseBody\resumeResult;

class BatchResumeVsStreamResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var resumeResult
     */
    public $resumeResult;
    protected $_name = [
        'requestId' => 'RequestId',
        'resumeResult' => 'ResumeResult',
    ];

    public function validate()
    {
        if (null !== $this->resumeResult) {
            $this->resumeResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resumeResult) {
            $res['ResumeResult'] = null !== $this->resumeResult ? $this->resumeResult->toArray($noStream) : $this->resumeResult;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResumeResult'])) {
            $model->resumeResult = resumeResult::fromMap($map['ResumeResult']);
        }

        return $model;
    }
}
