<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class UpdateTranscodeTemplateGroupRequest extends Model
{
    /**
     * @description The lock status of the template group. Valid values:
     *
     *   **Enabled**: The template group is locked.
     *   **Disabled**: The template group is not locked.
     *
     * @example locked
     *
     * @var string
     */
    public $locked;

    /**
     * @description The name of the transcoding template group.
     *
     *   The name can be up to 128 bytes in length.
     *   The value must be encoded in UTF-8.
     *
     * @example transcodetemplate
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the transcoding template group.
     *
     * @example 4c71a339fe*****52b4fa6f4527
     *
     * @var string
     */
    public $transcodeTemplateGroupId;

    /**
     * @description The configurations of the transcoding template. The value is a JSON-formatted string. For more information about the data structure, see the "TranscodeTemplate" section of the [Basic data types](~~52839~~) topic.
     *
     * @example [{"Video":{"Bitrate":"400","Codec":"H.264","Fps":"30"},"Audio":{"Codec":"AAC","Bitrate":"64","Definition":"SD","EncryptType":"Private","Container":{"Format":"m3u8"},"PackageType":"HLSPackage"}}]
     *
     * @var string
     */
    public $transcodeTemplateList;
    protected $_name = [
        'locked'                   => 'Locked',
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
        if (null !== $this->locked) {
            $res['Locked'] = $this->locked;
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
     * @return UpdateTranscodeTemplateGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Locked'])) {
            $model->locked = $map['Locked'];
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
