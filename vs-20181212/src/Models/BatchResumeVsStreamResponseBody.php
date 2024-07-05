<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\SDK\Vs\V20181212\Models\BatchResumeVsStreamResponseBody\resumeResult;
use AlibabaCloud\Tea\Model;

class BatchResumeVsStreamResponseBody extends Model
{
    /**
     * @example BEA5625F-8FCF-48F4-851B-CA63946DA664
     *
     * @var string
     */
    public $requestId;

    /**
     * @var resumeResult
     */
    public $resumeResult;
    protected $_name = [
        'requestId'    => 'RequestId',
        'resumeResult' => 'ResumeResult',
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
        if (null !== $this->resumeResult) {
            $res['ResumeResult'] = null !== $this->resumeResult ? $this->resumeResult->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchResumeVsStreamResponseBody
     */
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
