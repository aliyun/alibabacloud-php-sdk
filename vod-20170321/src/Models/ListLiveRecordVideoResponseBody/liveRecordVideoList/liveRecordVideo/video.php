<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListLiveRecordVideoResponseBody\liveRecordVideoList\liveRecordVideo;

use AlibabaCloud\SDK\Vod\V20170321\Models\ListLiveRecordVideoResponseBody\liveRecordVideoList\liveRecordVideo\video\snapshots;
use AlibabaCloud\Tea\Model;

class video extends Model
{
    /**
     * @description The ID of the video category.
     *
     * @example 78
     *
     * @var int
     */
    public $cateId;

    /**
     * @description The category of the video.
     *
     * @example Category name
     *
     * @var string
     */
    public $cateName;

    /**
     * @description The URL of the video thumbnail.
     *
     * @example https://example.aliyundoc.com/coversample.jpg
     *
     * @var string
     */
    public $coverURL;

    /**
     * @description The time when the audio or video file was created. The time is in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2017-12-08T07:40:56Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The description of the video file.
     *
     * @example Description of the ApsaraVideo VOD video
     *
     * @var string
     */
    public $description;

    /**
     * @description The duration of the video file. Unit: seconds.
     *
     * @example 135.6
     *
     * @var float
     */
    public $duration;

    /**
     * @description The time when the video was updated. The time is in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2017-12-08T09:40:56Z
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @description The size of the source video file. Unit: bytes.
     *
     * @example 10897890
     *
     * @var int
     */
    public $size;

    /**
     * @description The array of video snapshot URLs.
     *
     * @var snapshots
     */
    public $snapshots;

    /**
     * @description The status of the video. Valid values:
     *
     *   **Uploading**
     *   **UploadFail**
     *   **UploadSuccess**
     *   **Transcoding**
     *   **TranscodeFail**
     *   **Blocked**
     *   **Normal**: The video is normal.
     *
     * @example Normal
     *
     * @var string
     */
    public $status;

    /**
     * @description The tags of the video. Multiple tags are separated with commas (,).
     *
     * @example tag1, tag2
     *
     * @var string
     */
    public $tags;

    /**
     * @description The ID of the transcoding template group.
     *
     * @example 1
     *
     * @var string
     */
    public $templateGroupId;

    /**
     * @description The title of the video.
     *
     * @example Title of the ApsaraVideo VOD video
     *
     * @var string
     */
    public $title;

    /**
     * @description The ID of the video.
     *
     * @example 93ab850b4f6f*****54b6e91d24d81d4
     *
     * @var string
     */
    public $videoId;
    protected $_name = [
        'cateId'          => 'CateId',
        'cateName'        => 'CateName',
        'coverURL'        => 'CoverURL',
        'creationTime'    => 'CreationTime',
        'description'     => 'Description',
        'duration'        => 'Duration',
        'modifyTime'      => 'ModifyTime',
        'size'            => 'Size',
        'snapshots'       => 'Snapshots',
        'status'          => 'Status',
        'tags'            => 'Tags',
        'templateGroupId' => 'TemplateGroupId',
        'title'           => 'Title',
        'videoId'         => 'VideoId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cateId) {
            $res['CateId'] = $this->cateId;
        }
        if (null !== $this->cateName) {
            $res['CateName'] = $this->cateName;
        }
        if (null !== $this->coverURL) {
            $res['CoverURL'] = $this->coverURL;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->snapshots) {
            $res['Snapshots'] = null !== $this->snapshots ? $this->snapshots->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->templateGroupId) {
            $res['TemplateGroupId'] = $this->templateGroupId;
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
     * @return video
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CateId'])) {
            $model->cateId = $map['CateId'];
        }
        if (isset($map['CateName'])) {
            $model->cateName = $map['CateName'];
        }
        if (isset($map['CoverURL'])) {
            $model->coverURL = $map['CoverURL'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Snapshots'])) {
            $model->snapshots = snapshots::fromMap($map['Snapshots']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['TemplateGroupId'])) {
            $model->templateGroupId = $map['TemplateGroupId'];
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
