<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class DeleteMezzaninesRequest extends Model
{
    /**
     * @description Specifies whether to forcibly delete the source file. Valid values:
     *
     *   **false** (default)
     *   **true**
     *
     * >  If a video is uploaded without transcoding or is asynchronously transcoded, the source file of the video is used for original-quality playback. By default, the source file of the video cannot be deleted. To forcibly delete the mezzanine file, set this parameter to **true**.
     * @example false
     *
     * @var bool
     */
    public $force;

    /**
     * @description The IDs of audio or video files whose source files that you want to delete. You can specify up to 20 IDs. Separate multiple IDs with commas (,). You can use one of the following methods to obtain the ID:
     *
     *   After you upload a video in the [ApsaraVideo VOD console](https://vod.console.aliyun.com), you can log on to the ApsaraVideo VOD console and choose **Media Files** > **Audio/Video** to view the ID of the video.
     *   Obtain the value of VideoId from the response to the [CreateUploadVideo](https://help.aliyun.com/document_detail/55407.html) operation that you called to obtain the upload URL and credential.
     *   Obtain the value of VideoId from the response to the [SearchMedia](https://help.aliyun.com/document_detail/86044.html) operation that you called to query media information after the audio or video file is uploaded.
     *
     * This parameter is required.
     * @example 23ab850b4f654b6e91d24d8157****,93ab850b4f6f4b6e91d24d81d4****
     *
     * @var string
     */
    public $videoIds;
    protected $_name = [
        'force'    => 'Force',
        'videoIds' => 'VideoIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->force) {
            $res['Force'] = $this->force;
        }
        if (null !== $this->videoIds) {
            $res['VideoIds'] = $this->videoIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteMezzaninesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Force'])) {
            $model->force = $map['Force'];
        }
        if (isset($map['VideoIds'])) {
            $model->videoIds = $map['VideoIds'];
        }

        return $model;
    }
}
