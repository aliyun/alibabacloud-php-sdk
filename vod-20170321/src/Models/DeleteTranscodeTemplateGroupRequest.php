<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class DeleteTranscodeTemplateGroupRequest extends Model
{
    /**
     * @var string
     */
    public $forceDelGroup;

    /**
     * @var string
     */
    public $transcodeTemplateGroupId;

    /**
     * @var string
     */
    public $transcodeTemplateIds;
    protected $_name = [
        'forceDelGroup' => 'ForceDelGroup',
        'transcodeTemplateGroupId' => 'TranscodeTemplateGroupId',
        'transcodeTemplateIds' => 'TranscodeTemplateIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
