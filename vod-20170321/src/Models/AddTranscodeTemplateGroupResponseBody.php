<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class AddTranscodeTemplateGroupResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 25818875-5F78-4AF6-D7393642CA58****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the transcoding template group.
     *
     * @example 34e908aa4024af7821c31f93a2a****
     *
     * @var string
     */
    public $transcodeTemplateGroupId;
    protected $_name = [
        'requestId'                => 'RequestId',
        'transcodeTemplateGroupId' => 'TranscodeTemplateGroupId',
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
        if (null !== $this->transcodeTemplateGroupId) {
            $res['TranscodeTemplateGroupId'] = $this->transcodeTemplateGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddTranscodeTemplateGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TranscodeTemplateGroupId'])) {
            $model->transcodeTemplateGroupId = $map['TranscodeTemplateGroupId'];
        }

        return $model;
    }
}
