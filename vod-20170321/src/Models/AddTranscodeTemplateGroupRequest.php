<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class AddTranscodeTemplateGroupRequest extends Model
{
    /**
     * @description The ID of the application. Default value: **app-1000000**. For more information, see [Overview](~~113600~~).
     *
     * @example app-****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The name of the transcoding template group.
     *
     * > You must set TranscodeTemplateGroupId or Name in the request.
     * @example transcodetemplate
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the transcoding template group. If a transcoding template group ID is specified, you can add new transcoding templates to the template group.
     *
     * > You must set TranscodeTemplateGroupId or Name in the request.
     * @example 4c71a339fe52b4fa6f4527****
     *
     * @var string
     */
    public $transcodeTemplateGroupId;

    /**
     * @description The configurations of the transcoding template. The value is a string in JSON format. For more information about the data structure, see [Basic structures](~~52839~~).
     *
     * > If you do not specify this parameter, the transcoding job cannot be automatically created after you upload a video.
     * @example [{"Video":{"Bitrate":"400","Codec":"H.264","Fps":"30","Height":""},"Definition":"SD","Container":{"Format":"mp4"},"TemplateName":"testName","MuxConfig":{},"Audio":{"Codec":"AAC","Bitrate":"64","Samplerate":"44100"}}]
     *
     * @var string
     */
    public $transcodeTemplateList;
    protected $_name = [
        'appId'                    => 'AppId',
        'name'                     => 'Name',
        'transcodeTemplateGroupId' => 'TranscodeTemplateGroupId',
        'transcodeTemplateList'    => 'TranscodeTemplateList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->transcodeTemplateGroupId) {
            $res['TranscodeTemplateGroupId'] = $this->transcodeTemplateGroupId;
        }
        if (null !== $this->transcodeTemplateList) {
            $res['TranscodeTemplateList'] = $this->transcodeTemplateList;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['TranscodeTemplateGroupId'])) {
            $model->transcodeTemplateGroupId = $map['TranscodeTemplateGroupId'];
        }
        if (isset($map['TranscodeTemplateList'])) {
            $model->transcodeTemplateList = $map['TranscodeTemplateList'];
        }

        return $model;
    }
}
