<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetTranscodeJobResponseBody\transcodeParentJob;
use AlibabaCloud\Tea\Model;

class GetTranscodeJobResponseBody extends Model
{
    /**
     * @description 请求 id
     *
     * @var string
     */
    public $requestId;

    /**
     * @description TranscodeParentJobWithSubJobDTO
     *
     * @var transcodeParentJob
     */
    public $transcodeParentJob;
    protected $_name = [
        'requestId'          => 'RequestId',
        'transcodeParentJob' => 'TranscodeParentJob',
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
        if (null !== $this->transcodeParentJob) {
            $res['TranscodeParentJob'] = null !== $this->transcodeParentJob ? $this->transcodeParentJob->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTranscodeJobResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TranscodeParentJob'])) {
            $model->transcodeParentJob = transcodeParentJob::fromMap($map['TranscodeParentJob']);
        }

        return $model;
    }
}
