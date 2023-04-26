<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetPlayInfoResponseBody;

use AlibabaCloud\Tea\Model;

class videoBase extends Model
{
    /**
     * @description ApsaraVideo VOD
     *
     * @example http://example.aliyundoc.com/sample.jpg?auth_key=2333232-atb****
     *
     * @var string
     */
    public $coverURL;

    /**
     * @description The type of the media stream. Separate multiple types with commas (,). Valid values:
     *
     *   **video**
     *   **audio**
     *
     * By default, video and audio streams are returned.
     * @example 2017-06-26T06:38:48Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The time when the audio or video file was created. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example http://example.aliyundoc.com/****?auth_key=abdf2123-6783232****
     *
     * @var string
     */
    public $danMuURL;

    /**
     * @description The ID of the watermark that is associated with the media stream.
     *
     * @example 3.1667
     *
     * @var string
     */
    public $duration;

    /**
     * @description The ID of the audio or video file. You can use one of the following methods to obtain the ID of the file:
     *
     *   Log on to the [ApsaraVideo VOD](https://vod.console.aliyun.com) console. In the left-side navigation pane, choose **Media Files** > **Audio/Video**. On the Video and Audio page, you can view the ID of the audio or video file. This method is applicable to files that are uploaded by using the ApsaraVideo VOD console.
     *   Obtain the value of the VideoId parameter when you call the [CreateUploadVideo](~~55407~~) operation to upload files.
     *   Obtain the value of the VideoId parameter by calling the [SearchMedia](~~86044~~) operation. This method is applicable to files that have been uploaded.
     *
     * @example video
     *
     * @var string
     */
    public $mediaType;

    /**
     * @description The thumbnail URL of the audio or video file.
     *
     * @example Normal
     *
     * @var string
     */
    public $status;

    /**
     * @description The format of the media stream.
     *
     *   If the media file is a video file, the valid values are **mp4** and **m3u8**.
     *   If the media file is an audio-only file, the value is **mp3**.
     *
     * @example The CDN reauthentication configuration. The value is a JSON string. If CDN reauthentication is enabled, you can use this parameter to specify the UID and rand fields for URL authentication. For more information, see [URL authentication](~~57007~~).
     *
     * @var string
     */
    public $title;

    /**
     * @description The type of the media stream. If the media stream is a video stream, the value is **video**. If the media stream is an audio-only stream, the value is **audio**.
     *
     * @example 93ab850b4f654b6e91d24d81d44****
     *
     * @var string
     */
    public $videoId;
    protected $_name = [
        'coverURL'     => 'CoverURL',
        'creationTime' => 'CreationTime',
        'danMuURL'     => 'DanMuURL',
        'duration'     => 'Duration',
        'mediaType'    => 'MediaType',
        'status'       => 'Status',
        'title'        => 'Title',
        'videoId'      => 'VideoId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->coverURL) {
            $res['CoverURL'] = $this->coverURL;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->danMuURL) {
            $res['DanMuURL'] = $this->danMuURL;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->mediaType) {
            $res['MediaType'] = $this->mediaType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoBase
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CoverURL'])) {
            $model->coverURL = $map['CoverURL'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['DanMuURL'])) {
            $model->danMuURL = $map['DanMuURL'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['MediaType'])) {
            $model->mediaType = $map['MediaType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }

        return $model;
    }
}
