<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class DeleteMediaConvertTemplateGroupRequest extends Model
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
    public $transcodeTemplateIdList;
    protected $_name = [
        'forceDelGroup' => 'ForceDelGroup',
        'transcodeTemplateGroupId' => 'TranscodeTemplateGroupId',
        'transcodeTemplateIdList' => 'TranscodeTemplateIdList',
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

        if (null !== $this->transcodeTemplateIdList) {
            $res['TranscodeTemplateIdList'] = $this->transcodeTemplateIdList;
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

        if (isset($map['TranscodeTemplateIdList'])) {
            $model->transcodeTemplateIdList = $map['TranscodeTemplateIdList'];
        }

        return $model;
    }
}
