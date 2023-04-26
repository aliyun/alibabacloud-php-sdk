<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class RefreshMediaPlayUrlsRequest extends Model
{
    /**
     * @description Specifies the type of the refresh or prefetch operation. Default value: Single. Valid values:
     *
     *   **Single**: Only one latest transcoded stream is refreshed or prefetched for each resolution and format.
     *   **Multiple**: All transcoded streams are refreshed or prefetched for each resolution and format.
     *
     * @example HD, SD
     *
     * @var string
     */
    public $definitions;

    /**
     * @description Specifies the types of media streams you want to refresh or prefetch. You can specify multiple types. Separate multiple types with commas (,). If you leave this parameter empty, media streams in all types are refreshed or prefetched by default. Valid values:
     *
     *   **video**
     *   **audio**
     *
     * @example mp4,m3u8
     *
     * @var string
     */
    public $formats;

    /**
     * @description Specifies whether to refresh or prefetch the playback URLs of the TS files of the M3U8 media stream. Default value: false. Valid values:
     *
     *   **false**
     *   **true**
     *
     * @example ca3a8f6e4957b658067095869****, a6e49sfgd23p5g9ja7095863****
     *
     * @var string
     */
    public $mediaIds;

    /**
     * @description The IDs of the media files that you want to refresh or prefetch. You can specify a maximum of 20 IDs. Separate multiple IDs with commas (,). You can use one of the following methods to obtain the ID:
     *
     *   Log on to the [ApsaraVideo VOD](https://vod.console.aliyun.com) console. In the left-side navigation pane, choose **Media Files** > **Audio/Video**. On the Video and Audio page, view the ID of the audio or video file. This method is applicable to files that are uploaded by using the ApsaraVideo VOD console.
     *   Obtain the value of VideoId from the response to the [CreateUploadVideo](~~55407~~) operation that you call to upload media files.
     *   Obtain the value of VideoId from the response to the [SearchMedia](~~86044~~) operation that you call to query the media ID after the media file is uploaded.
     *
     * @example Single
     *
     * @var string
     */
    public $resultType;

    /**
     * @description The IDs of the media files that cannot be operated on. In most cases, media files cannot be operated on because you are not authorized to perform the operations. For more information, see [Overview](~~113600~~).
     *
     * @example 5
     *
     * @var int
     */
    public $sliceCount;

    /**
     * @description The ID of the refresh or prefetch task.
     *
     * @example false
     *
     * @var bool
     */
    public $sliceFlag;

    /**
     * @description The custom configurations such as callback configurations and upload acceleration configurations. The value is a JSON string. For more information, see [Request parameter](~~86952~~).
     * - You must submit a ticket to enable the upload acceleration feature. For more information, see [Overview](~~55396~~).
     * @example video
     *
     * @var string
     */
    public $streamType;

    /**
     * @description The IDs of the media files that do not exist.
     *
     * @example Preload
     *
     * @var string
     */
    public $taskType;

    /**
     * @description Specifies the resolutions of the media streams you want to refresh or prefetch. You can specify multiple resolutions. Separate multiple resolutions with commas (,). If you leave this parameter empty, media streams in all resolutions are refreshed or prefetched by default.
     *
     * >  The value must be supported in the **Definition** section in [Parameters for media assets](~~124671~~).
     * @example {"MessageCallback":{"CallbackURL":"http://example.aliyundoc.com"}, "Extend":{"localId":"xxx","test":"www"}}
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'definitions' => 'Definitions',
        'formats'     => 'Formats',
        'mediaIds'    => 'MediaIds',
        'resultType'  => 'ResultType',
        'sliceCount'  => 'SliceCount',
        'sliceFlag'   => 'SliceFlag',
        'streamType'  => 'StreamType',
        'taskType'    => 'TaskType',
        'userData'    => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->definitions) {
            $res['Definitions'] = $this->definitions;
        }
        if (null !== $this->formats) {
            $res['Formats'] = $this->formats;
        }
        if (null !== $this->mediaIds) {
            $res['MediaIds'] = $this->mediaIds;
        }
        if (null !== $this->resultType) {
            $res['ResultType'] = $this->resultType;
        }
        if (null !== $this->sliceCount) {
            $res['SliceCount'] = $this->sliceCount;
        }
        if (null !== $this->sliceFlag) {
            $res['SliceFlag'] = $this->sliceFlag;
        }
        if (null !== $this->streamType) {
            $res['StreamType'] = $this->streamType;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RefreshMediaPlayUrlsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Definitions'])) {
            $model->definitions = $map['Definitions'];
        }
        if (isset($map['Formats'])) {
            $model->formats = $map['Formats'];
        }
        if (isset($map['MediaIds'])) {
            $model->mediaIds = $map['MediaIds'];
        }
        if (isset($map['ResultType'])) {
            $model->resultType = $map['ResultType'];
        }
        if (isset($map['SliceCount'])) {
            $model->sliceCount = $map['SliceCount'];
        }
        if (isset($map['SliceFlag'])) {
            $model->sliceFlag = $map['SliceFlag'];
        }
        if (isset($map['StreamType'])) {
            $model->streamType = $map['StreamType'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
