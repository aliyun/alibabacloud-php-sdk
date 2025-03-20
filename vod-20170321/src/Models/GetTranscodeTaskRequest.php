<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class GetTranscodeTaskRequest extends Model
{
    /**
     * @description Transcoding job ID. Supports up to 10 IDs, and multiple IDs should be separated by a comma (,). You can obtain this value in the following ways:
     *
     * When initiating a transcoding task through the [SubmitTranscodeJobs](https://help.aliyun.com/document_detail/454920.html) interface, it is the value of the returned parameter JobId.
     *
     * @example 86c1925fba0****,7afb201e7fa****,2cc4997378****
     *
     * @var string
     */
    public $jobIds;

    /**
     * @description The ID of the transcoding task. You can use one of the following methods to obtain the ID:
     *
     *   Obtain the value of TranscodeTaskId from the response to the [SubmitTranscodeJobs](https://help.aliyun.com/document_detail/68570.html) operation.
     *   Obtain the value of TranscodeTaskId from the response to the [ListTranscodeTask](https://help.aliyun.com/document_detail/109120.html) operation.
     *
     * @example b1b65ab107e14*****3dbb900f6c1fe0
     *
     * @var string
     */
    public $transcodeTaskId;
    protected $_name = [
        'jobIds' => 'JobIds',
        'transcodeTaskId' => 'TranscodeTaskId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobIds) {
            $res['JobIds'] = $this->jobIds;
        }
        if (null !== $this->transcodeTaskId) {
            $res['TranscodeTaskId'] = $this->transcodeTaskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTranscodeTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobIds'])) {
            $model->jobIds = $map['JobIds'];
        }
        if (isset($map['TranscodeTaskId'])) {
            $model->transcodeTaskId = $map['TranscodeTaskId'];
        }

        return $model;
    }
}
