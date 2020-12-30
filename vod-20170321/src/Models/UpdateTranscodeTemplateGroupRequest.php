<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class UpdateTranscodeTemplateGroupRequest extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $transcodeTemplateList;

    /**
     * @var string
     */
    public $locked;

    /**
     * @var string
     */
    public $transcodeTemplateGroupId;
    protected $_name = [
        'name'                     => 'Name',
        'transcodeTemplateList'    => 'TranscodeTemplateList',
        'locked'                   => 'Locked',
        'transcodeTemplateGroupId' => 'TranscodeTemplateGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->transcodeTemplateList) {
            $res['TranscodeTemplateList'] = $this->transcodeTemplateList;
        }
        if (null !== $this->locked) {
            $res['Locked'] = $this->locked;
        }
        if (null !== $this->transcodeTemplateGroupId) {
            $res['TranscodeTemplateGroupId'] = $this->transcodeTemplateGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTranscodeTemplateGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['TranscodeTemplateList'])) {
            $model->transcodeTemplateList = $map['TranscodeTemplateList'];
        }
        if (isset($map['Locked'])) {
            $model->locked = $map['Locked'];
        }
        if (isset($map['TranscodeTemplateGroupId'])) {
            $model->transcodeTemplateGroupId = $map['TranscodeTemplateGroupId'];
        }

        return $model;
    }
}
