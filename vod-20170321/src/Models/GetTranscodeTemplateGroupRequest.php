<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class GetTranscodeTemplateGroupRequest extends Model
{
    /**
     * @var string
     */
    public $transcodeTemplateGroupId;
    protected $_name = [
        'transcodeTemplateGroupId' => 'TranscodeTemplateGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->transcodeTemplateGroupId) {
            $res['TranscodeTemplateGroupId'] = $this->transcodeTemplateGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTranscodeTemplateGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TranscodeTemplateGroupId'])) {
            $model->transcodeTemplateGroupId = $map['TranscodeTemplateGroupId'];
        }

        return $model;
    }
}
