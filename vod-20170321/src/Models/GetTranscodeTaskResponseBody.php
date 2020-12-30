<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeTaskResponseBody\transcodeTask;
use AlibabaCloud\Tea\Model;

class GetTranscodeTaskResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var transcodeTask
     */
    public $transcodeTask;
    protected $_name = [
        'requestId'     => 'RequestId',
        'transcodeTask' => 'TranscodeTask',
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
        if (null !== $this->transcodeTask) {
            $res['TranscodeTask'] = null !== $this->transcodeTask ? $this->transcodeTask->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTranscodeTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TranscodeTask'])) {
            $model->transcodeTask = transcodeTask::fromMap($map['TranscodeTask']);
        }

        return $model;
    }
}
