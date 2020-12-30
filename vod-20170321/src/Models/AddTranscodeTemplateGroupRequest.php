<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class AddTranscodeTemplateGroupRequest extends Model
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
    public $transcodeTemplateGroupId;

    /**
     * @var string
     */
    public $appId;
    protected $_name = [
        'name'                     => 'Name',
        'transcodeTemplateList'    => 'TranscodeTemplateList',
        'transcodeTemplateGroupId' => 'TranscodeTemplateGroupId',
        'appId'                    => 'AppId',
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
        if (null !== $this->transcodeTemplateGroupId) {
            $res['TranscodeTemplateGroupId'] = $this->transcodeTemplateGroupId;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddTranscodeTemplateGroupRequest
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
        if (isset($map['TranscodeTemplateGroupId'])) {
            $model->transcodeTemplateGroupId = $map['TranscodeTemplateGroupId'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        return $model;
    }
}
