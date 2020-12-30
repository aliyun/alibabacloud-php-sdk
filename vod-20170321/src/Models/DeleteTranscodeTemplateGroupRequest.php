<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class DeleteTranscodeTemplateGroupRequest extends Model
{
    /**
     * @var string
     */
    public $transcodeTemplateGroupId;

    /**
     * @var string
     */
    public $transcodeTemplateIds;

    /**
     * @var string
     */
    public $forceDelGroup;
    protected $_name = [
        'transcodeTemplateGroupId' => 'TranscodeTemplateGroupId',
        'transcodeTemplateIds'     => 'TranscodeTemplateIds',
        'forceDelGroup'            => 'ForceDelGroup',
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
        if (null !== $this->transcodeTemplateIds) {
            $res['TranscodeTemplateIds'] = $this->transcodeTemplateIds;
        }
        if (null !== $this->forceDelGroup) {
            $res['ForceDelGroup'] = $this->forceDelGroup;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteTranscodeTemplateGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TranscodeTemplateGroupId'])) {
            $model->transcodeTemplateGroupId = $map['TranscodeTemplateGroupId'];
        }
        if (isset($map['TranscodeTemplateIds'])) {
            $model->transcodeTemplateIds = $map['TranscodeTemplateIds'];
        }
        if (isset($map['ForceDelGroup'])) {
            $model->forceDelGroup = $map['ForceDelGroup'];
        }

        return $model;
    }
}
