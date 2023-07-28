<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class GetUploadDetailsRequest extends Model
{
    /**
     * @description The ID of the media file, namely, the audio or video ID. You can specify a maximum of 20 IDs. Separate multiple IDs with commas (,). You can use one of the following methods to obtain the audio or video ID:
     *   Log on to the [ApsaraVideo VOD](https://vod.console.aliyun.com) console. In the left-side navigation pane, choose **Media Files** > **Audio/Video**. On the Video and Audio page, you can view the audio or video ID. Use this method if the audio or video file is uploaded by using the ApsaraVideo VOD console.
     *   View the value of the VideoId parameter returned by the [CreateUploadVideo](~~55407~~) operation that you called to obtain an upload URL and credential.
     *   View the value of the VideoId parameter returned by the [SearchMedia](~~86044~~) operation that you called to query media information after the audio or video file is uploaded.
     *
     * @example 61ccbdb06fa83012be4d8083f6****,7d2fbc380b0e08e55f****
     *
     * @var string
     */
    public $mediaIds;

    /**
     * @description The type of the media file. Set the value to **video**, which indicates audio and video files.
     *
     * @example video
     *
     * @var string
     */
    public $mediaType;
    protected $_name = [
        'mediaIds'  => 'MediaIds',
        'mediaType' => 'MediaType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaIds) {
            $res['MediaIds'] = $this->mediaIds;
        }
        if (null !== $this->mediaType) {
            $res['MediaType'] = $this->mediaType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUploadDetailsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaIds'])) {
            $model->mediaIds = $map['MediaIds'];
        }
        if (isset($map['MediaType'])) {
            $model->mediaType = $map['MediaType'];
        }

        return $model;
    }
}
