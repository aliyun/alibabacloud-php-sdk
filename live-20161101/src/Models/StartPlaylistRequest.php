<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class StartPlaylistRequest extends Model
{
    /**
     * @description The offset of the position where the system starts the playback. This parameter takes effect only if the input source is a video file. Unit: milliseconds.
     *
     * A value greater than 0 indicates an offset from the first frame.
     *
     * @example 10000
     *
     * @var int
     */
    public $offset;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the episode list. If the episode list was created by calling the [AddPlaylistItems](https://help.aliyun.com/document_detail/2848078.html) operation, check the value of the response parameter ProgramId to obtain the ID.
     *
     * This parameter is required.
     *
     * @example 445409ec-7eaa-461d-8f29-4bec2eb9****
     *
     * @var string
     */
    public $programId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The method to resume the playback of the episode list. Valid values:
     *
     *   **Restart**: resumes the playback from the beginning.
     *   **Continue**: resumes the playback from the position where the previous playback stops. The **StartItemId** parameter is required only if you set **ResumeMode** to **Custom**.
     *   **Custom**: resumes the playback from a custom position.
     *
     * @example Custom
     *
     * @var string
     */
    public $resumeMode;

    /**
     * @description The ID of the first episode to play. This episode is the first to play in carousel playback.
     *
     * >  This parameter is required only if you set ResumeMode to Custom.
     *
     * @example asdfasdfasdf****
     *
     * @var string
     */
    public $startItemId;
    protected $_name = [
        'offset' => 'Offset',
        'ownerId' => 'OwnerId',
        'programId' => 'ProgramId',
        'regionId' => 'RegionId',
        'resumeMode' => 'ResumeMode',
        'startItemId' => 'StartItemId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->offset) {
            $res['Offset'] = $this->offset;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->programId) {
            $res['ProgramId'] = $this->programId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resumeMode) {
            $res['ResumeMode'] = $this->resumeMode;
        }
        if (null !== $this->startItemId) {
            $res['StartItemId'] = $this->startItemId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartPlaylistRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ProgramId'])) {
            $model->programId = $map['ProgramId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResumeMode'])) {
            $model->resumeMode = $map['ResumeMode'];
        }
        if (isset($map['StartItemId'])) {
            $model->startItemId = $map['StartItemId'];
        }

        return $model;
    }
}
