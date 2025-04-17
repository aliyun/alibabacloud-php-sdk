<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListTranscodeTemplateGroupResponseBody\transcodeTemplateGroupList;

class ListTranscodeTemplateGroupResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var transcodeTemplateGroupList[]
     */
    public $transcodeTemplateGroupList;
    protected $_name = [
        'requestId' => 'RequestId',
        'transcodeTemplateGroupList' => 'TranscodeTemplateGroupList',
    ];

    public function validate()
    {
        if (\is_array($this->transcodeTemplateGroupList)) {
            Model::validateArray($this->transcodeTemplateGroupList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->transcodeTemplateGroupList) {
            if (\is_array($this->transcodeTemplateGroupList)) {
                $res['TranscodeTemplateGroupList'] = [];
                $n1 = 0;
                foreach ($this->transcodeTemplateGroupList as $item1) {
                    $res['TranscodeTemplateGroupList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['TranscodeTemplateGroupList'])) {
            if (!empty($map['TranscodeTemplateGroupList'])) {
                $model->transcodeTemplateGroupList = [];
                $n1 = 0;
                foreach ($map['TranscodeTemplateGroupList'] as $item1) {
                    $model->transcodeTemplateGroupList[$n1++] = transcodeTemplateGroupList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
