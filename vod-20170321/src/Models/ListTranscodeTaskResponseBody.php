<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListTranscodeTaskResponseBody\transcodeTaskList;

class ListTranscodeTaskResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var transcodeTaskList[]
     */
    public $transcodeTaskList;
    protected $_name = [
        'requestId' => 'RequestId',
        'transcodeTaskList' => 'TranscodeTaskList',
    ];

    public function validate()
    {
        if (\is_array($this->transcodeTaskList)) {
            Model::validateArray($this->transcodeTaskList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->transcodeTaskList) {
            if (\is_array($this->transcodeTaskList)) {
                $res['TranscodeTaskList'] = [];
                $n1 = 0;
                foreach ($this->transcodeTaskList as $item1) {
                    $res['TranscodeTaskList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['TranscodeTaskList'])) {
            if (!empty($map['TranscodeTaskList'])) {
                $model->transcodeTaskList = [];
                $n1 = 0;
                foreach ($map['TranscodeTaskList'] as $item1) {
                    $model->transcodeTaskList[$n1] = transcodeTaskList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
