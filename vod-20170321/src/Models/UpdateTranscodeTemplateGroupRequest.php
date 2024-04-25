<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class UpdateTranscodeTemplateGroupRequest extends Model
{
    /**
     * @description The lock status of the transcoding template group. Valid values:
     *
     *   **Enabled**: The transcoding template group is locked and cannot be modified.
     *   **Disabled** (default): The transcoding template group is not locked.
     *
     * @example Disabled
     *
     * @var string
     */
    public $locked;

    /**
     * @description The name of the transcoding template group.
     *
     *   The name cannot exceed 128 bytes.
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
     * @description The configurations of the transcoding template. The value must be a JSON string. For more information about the data structure, see [TranscodeTemplate](~~52839#title-9mb-8o2-uu6~~).
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
