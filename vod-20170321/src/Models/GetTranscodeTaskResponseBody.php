<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeTaskResponseBody\transcodeJobInfoList;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeTaskResponseBody\transcodeTask;
use AlibabaCloud\Tea\Model;

class GetTranscodeTaskResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $nonExistJobIds;

    /**
     * @description The ID of the request.
     *
     * @example F4C6D5BE-BF13-45*****6C-516EA8906DCD
     *
     * @var string
     */
    public $requestId;

    /**
     * @var transcodeJobInfoList[]
     */
    public $transcodeJobInfoList;

    /**
     * @description Details about transcoding tasks.
     *
     * @var transcodeTask
     */
    public $transcodeTask;
    protected $_name = [
        'nonExistJobIds'       => 'NonExistJobIds',
        'requestId'            => 'RequestId',
        'transcodeJobInfoList' => 'TranscodeJobInfoList',
        'transcodeTask'        => 'TranscodeTask',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nonExistJobIds) {
            $res['NonExistJobIds'] = $this->nonExistJobIds;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->transcodeJobInfoList) {
            $res['TranscodeJobInfoList'] = [];
            if (null !== $this->transcodeJobInfoList && \is_array($this->transcodeJobInfoList)) {
                $n = 0;
                foreach ($this->transcodeJobInfoList as $item) {
                    $res['TranscodeJobInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['NonExistJobIds'])) {
            if (!empty($map['NonExistJobIds'])) {
                $model->nonExistJobIds = $map['NonExistJobIds'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TranscodeJobInfoList'])) {
            if (!empty($map['TranscodeJobInfoList'])) {
                $model->transcodeJobInfoList = [];
                $n                           = 0;
                foreach ($map['TranscodeJobInfoList'] as $item) {
                    $model->transcodeJobInfoList[$n++] = null !== $item ? transcodeJobInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TranscodeTask'])) {
            $model->transcodeTask = transcodeTask::fromMap($map['TranscodeTask']);
        }

        return $model;
    }
}
