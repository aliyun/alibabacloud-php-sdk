<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeTemplateGroupResponseBody\transcodeTemplateGroup;

class GetTranscodeTemplateGroupResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var transcodeTemplateGroup
     */
    public $transcodeTemplateGroup;
    protected $_name = [
        'requestId' => 'RequestId',
        'transcodeTemplateGroup' => 'TranscodeTemplateGroup',
    ];

    public function validate()
    {
        if (null !== $this->transcodeTemplateGroup) {
            $this->transcodeTemplateGroup->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->transcodeTemplateGroup) {
            $res['TranscodeTemplateGroup'] = null !== $this->transcodeTemplateGroup ? $this->transcodeTemplateGroup->toArray($noStream) : $this->transcodeTemplateGroup;
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

        if (isset($map['TranscodeTemplateGroup'])) {
            $model->transcodeTemplateGroup = transcodeTemplateGroup::fromMap($map['TranscodeTemplateGroup']);
        }

        return $model;
    }
}
