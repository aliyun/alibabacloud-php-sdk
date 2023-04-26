<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeTemplateGroupResponseBody\transcodeTemplateGroup;
use AlibabaCloud\Tea\Model;

class GetTranscodeTemplateGroupResponseBody extends Model
{
    /**
     * @description The ID of the transcoding template.
     *
     * @example 6730AC93-7B12-4B*****7F-49EE1FE8BC49
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The format of the container used to encapsulate audio and video streams. The value is a JSON-formatted string.
     *
     * @var transcodeTemplateGroup
     */
    public $transcodeTemplateGroup;
    protected $_name = [
        'requestId'              => 'RequestId',
        'transcodeTemplateGroup' => 'TranscodeTemplateGroup',
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
        if (null !== $this->transcodeTemplateGroup) {
            $res['TranscodeTemplateGroup'] = null !== $this->transcodeTemplateGroup ? $this->transcodeTemplateGroup->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTranscodeTemplateGroupResponseBody
     */
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
