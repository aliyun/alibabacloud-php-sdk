<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetPlayInfoResponseBody;

use AlibabaCloud\Tea\Model;

class videoBase extends Model
{
    /**
     * @description The thumbnail URL of the audio or video file.
     *
     * @example http://example.aliyundoc.com/sample.jpg?auth_key=2333232-atb****
     *
     * @var string
     */
    public $coverURL;

    /**
     * @description The time when the audio or video file was created. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2017-06-26T06:38:48Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The URL of the masked live comment data.
     *
     * @example http://example.aliyundoc.com/****?auth_key=abdf2123-6783232****
     *
     * @var string
     */
    public $danMuURL;

    /**
     * @description The duration of the audio or video file. Unit: seconds.
     *
     * @example 3.1667
     *
     * @var string
     */
    public $duration;

    /**
     * @description The type of the media file. Valid values:
     *
     *   **video**
     *   **audio**
     *
     * @example video
     *
     * @var string
     */
    public $mediaType;

    /**
     * @description The status of the audio or video file. For more information about the value range and description, see the [Status](~~52839~~) table.
     *
     * @example Normal
     *
     * @var string
     */
    public $status;

    /**
     * @description The storage class of the audio or video file. Valid values:
     *
     *   **Standard**: All media resources are stored as Standard objects.
     *   **IA**: All media resources are stored as IA objects.
     *   **Archive**: All media resources are stored as Archive objects.
     *   **ColdArchive**: All media resources are stored as Cold Archive objects.
     *   **SourceIA**: Only the source files are IA objects.
     *   **SourceArchive**: Only the source files are Archive objects.
     *   **SourceColdArchive**: Only the source files are Cold Archive objects.
     *   **Changing**: The storage class of the audio or video file is being changed.
     *   **SourceChanging**: The storage class of the source file is being changed.
     *
     * @example Standard
     *
     * @var string
     */
    public $storageClass;

    /**
     * @description The title of the audio or video file.
     *
     * @example ApsaraVideo VOD
     *
     * @var string
     */
    public $title;

    /**
     * @description The ID of the media file.
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
        'storageClass' => 'StorageClass',
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
        if (null !== $this->storageClass) {
            $res['StorageClass'] = $this->storageClass;
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
        if (isset($map['StorageClass'])) {
            $model->storageClass = $map['StorageClass'];
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
