<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class DeleteTranscodeTemplateGroupRequest extends Model
{
    /**
     * @description Specifies whether to forcibly delete the entire transcoding template group. Valid values:
     *
     *   **true**: deletes the entire transcoding template group and its transcoding templates.
     *   **false**: removes the specified transcoding templates from the transcoding template group. This is the default value.
     *
     * @example true
     *
     * @var string
     */
    public $forceDelGroup;

    /**
     * @description The ID of the transcoding template group.
     *
     * @example 4c71a339fec*****152b4fa6f4527
     *
     * @var string
     */
    public $transcodeTemplateGroupId;

    /**
     * @description The IDs of the transcoding templates that you want to remove.
     *
     *   Separate multiple IDs with commas (,).
     *   You can specify a maximum of 10 IDs.
     *
     * @example ["613702defdc4*****6a3b94cace1129e","bfd6c90253a2*****7fc054d7c5825"]
     *
     * @var string
     */
    public $transcodeTemplateIds;
    protected $_name = [
        'forceDelGroup'            => 'ForceDelGroup',
        'transcodeTemplateGroupId' => 'TranscodeTemplateGroupId',
        'transcodeTemplateIds'     => 'TranscodeTemplateIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->forceDelGroup) {
            $res['ForceDelGroup'] = $this->forceDelGroup;
        }
        if (null !== $this->transcodeTemplateGroupId) {
            $res['TranscodeTemplateGroupId'] = $this->transcodeTemplateGroupId;
        }
        if (null !== $this->transcodeTemplateIds) {
            $res['TranscodeTemplateIds'] = $this->transcodeTemplateIds;
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
        if (isset($map['ForceDelGroup'])) {
            $model->forceDelGroup = $map['ForceDelGroup'];
        }
        if (isset($map['TranscodeTemplateGroupId'])) {
            $model->transcodeTemplateGroupId = $map['TranscodeTemplateGroupId'];
        }
        if (isset($map['TranscodeTemplateIds'])) {
            $model->transcodeTemplateIds = $map['TranscodeTemplateIds'];
        }

        return $model;
    }
}
