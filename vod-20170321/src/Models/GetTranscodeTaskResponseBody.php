<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeTaskResponseBody\transcodeJobInfoList;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeTaskResponseBody\transcodeTask;

class GetTranscodeTaskResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $nonExistJobIds;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var transcodeJobInfoList[]
     */
    public $transcodeJobInfoList;

    /**
     * @var transcodeTask
     */
    public $transcodeTask;
    protected $_name = [
        'nonExistJobIds' => 'NonExistJobIds',
        'requestId' => 'RequestId',
        'transcodeJobInfoList' => 'TranscodeJobInfoList',
        'transcodeTask' => 'TranscodeTask',
    ];

    public function validate()
    {
        if (\is_array($this->nonExistJobIds)) {
            Model::validateArray($this->nonExistJobIds);
        }
        if (\is_array($this->transcodeJobInfoList)) {
            Model::validateArray($this->transcodeJobInfoList);
        }
        if (null !== $this->transcodeTask) {
            $this->transcodeTask->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nonExistJobIds) {
            if (\is_array($this->nonExistJobIds)) {
                $res['NonExistJobIds'] = [];
                $n1 = 0;
                foreach ($this->nonExistJobIds as $item1) {
                    $res['NonExistJobIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->transcodeJobInfoList) {
            if (\is_array($this->transcodeJobInfoList)) {
                $res['TranscodeJobInfoList'] = [];
                $n1 = 0;
                foreach ($this->transcodeJobInfoList as $item1) {
                    $res['TranscodeJobInfoList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->transcodeTask) {
            $res['TranscodeTask'] = null !== $this->transcodeTask ? $this->transcodeTask->toArray($noStream) : $this->transcodeTask;
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
        if (isset($map['NonExistJobIds'])) {
            if (!empty($map['NonExistJobIds'])) {
                $model->nonExistJobIds = [];
                $n1 = 0;
                foreach ($map['NonExistJobIds'] as $item1) {
                    $model->nonExistJobIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TranscodeJobInfoList'])) {
            if (!empty($map['TranscodeJobInfoList'])) {
                $model->transcodeJobInfoList = [];
                $n1 = 0;
                foreach ($map['TranscodeJobInfoList'] as $item1) {
                    $model->transcodeJobInfoList[$n1++] = transcodeJobInfoList::fromMap($item1);
                }
            }
        }

        if (isset($map['TranscodeTask'])) {
            $model->transcodeTask = transcodeTask::fromMap($map['TranscodeTask']);
        }

        return $model;
    }
}
