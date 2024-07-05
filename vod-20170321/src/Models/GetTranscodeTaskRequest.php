<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class GetTranscodeTaskRequest extends Model
{
    /**
     * @description The ID of the transcoding task. You can use one of the following methods to obtain the ID:
     *
     *   Obtain the value of TranscodeTaskId from the response to the [SubmitTranscodeJobs](https://help.aliyun.com/document_detail/68570.html) operation.
     *   Obtain the value of TranscodeTaskId from the response to the [ListTranscodeTask](https://help.aliyun.com/document_detail/109120.html) operation.
     *
     * This parameter is required.
     * @example b1b65ab107e14*****3dbb900f6c1fe0
     *
     * @var string
     */
    public $transcodeTaskId;
    protected $_name = [
        'transcodeTaskId' => 'TranscodeTaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (isset($map['TranscodeTaskId'])) {
            $model->transcodeTaskId = $map['TranscodeTaskId'];
        }

        return $model;
    }
}
