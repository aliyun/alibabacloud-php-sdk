<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetMezzanineInfoResponseBody;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetMezzanineInfoResponseBody\mezzanine\audioStreamList;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMezzanineInfoResponseBody\mezzanine\videoStreamList;
use AlibabaCloud\Tea\Model;

class mezzanine extends Model
{
    /**
     * @description The information about the audio stream.
     *
     * @var audioStreamList[]
     */
    public $audioStreamList;

    /**
     * @description The bitrate of the file. Unit: Kbit/s.
     *
     * @example 771.2280
     *
     * @var string
     */
    public $bitrate;

    /**
     * @description The time when the file was created. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2017-11-14T09:15:50Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The duration of the file. Unit: seconds.
     *
     * @example 42.4930
     *
     * @var string
     */
    public $duration;

    /**
     * @description The name of the file.
     *
     * @example 27ffc438-164h67f57ef-0005-6884-51a-1****.mp4
     *
     * @var string
     */
    public $fileName;

    /**
     * @description The URL of the file.
     *
     * @example http://example-bucket-****.oss-cn-shanghai.aliyuncs.com/27ffc438-164h67f57ef-0005-6884-51a-1****.mp4
     *
     * @var string
     */
    public $fileURL;

    /**
     * @description The frame rate of the file. Unit: frames per second.
     *
     * @example 25.0000
     *
     * @var string
     */
    public $fps;

    /**
     * @description The height of the file. Unit: pixel.
     *
     * @example 540
     *
     * @var int
     */
    public $height;

    /**
     * @description The type of the mezzanine file URL. Valid values:
     *
     * - **oss**: OSS URL
     * - **cdn** (default): CDN URL
     *
     * > If you specify an OSS URL for the video stream, the video stream must be in the MP4 format.
     * @example oss
     *
     * @var string
     */
    public $outputType;

    /**
     * @description The size of the file. Unit: byte.
     *
     * @example 4096477
     *
     * @var int
     */
    public $size;

    /**
     * @description The status of the file. Valid values:
     *
     *   **Uploading**: The file is being uploaded. This is the initial status.
     *   **Normal**: The file is uploaded.
     *   **UploadFail**: The file fails to be uploaded.
     *   **Deleted**: The file is deleted.
     *
     * @example Normal
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the video.
     *
     * @example 1f1a6fc03ca04814031b8a6559e****
     *
     * @var string
     */
    public $videoId;

    /**
     * @description The information about the video stream.
     *
     * @var videoStreamList[]
     */
    public $videoStreamList;

    /**
     * @description The width of the file. Unit: pixel.
     *
     * @example 960
     *
     * @var int
     */
    public $width;
    protected $_name = [
        'audioStreamList' => 'AudioStreamList',
        'bitrate'         => 'Bitrate',
        'creationTime'    => 'CreationTime',
        'duration'        => 'Duration',
        'fileName'        => 'FileName',
        'fileURL'         => 'FileURL',
        'fps'             => 'Fps',
        'height'          => 'Height',
        'outputType'      => 'OutputType',
        'size'            => 'Size',
        'status'          => 'Status',
        'videoId'         => 'VideoId',
        'videoStreamList' => 'VideoStreamList',
        'width'           => 'Width',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioStreamList) {
            $res['AudioStreamList'] = [];
            if (null !== $this->audioStreamList && \is_array($this->audioStreamList)) {
                $n = 0;
                foreach ($this->audioStreamList as $item) {
                    $res['AudioStreamList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->bitrate) {
            $res['Bitrate'] = $this->bitrate;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->fileURL) {
            $res['FileURL'] = $this->fileURL;
        }
        if (null !== $this->fps) {
            $res['Fps'] = $this->fps;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->outputType) {
            $res['OutputType'] = $this->outputType;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }
        if (null !== $this->videoStreamList) {
            $res['VideoStreamList'] = [];
            if (null !== $this->videoStreamList && \is_array($this->videoStreamList)) {
                $n = 0;
                foreach ($this->videoStreamList as $item) {
                    $res['VideoStreamList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mezzanine
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioStreamList'])) {
            if (!empty($map['AudioStreamList'])) {
                $model->audioStreamList = [];
                $n                      = 0;
                foreach ($map['AudioStreamList'] as $item) {
                    $model->audioStreamList[$n++] = null !== $item ? audioStreamList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Bitrate'])) {
            $model->bitrate = $map['Bitrate'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['FileURL'])) {
            $model->fileURL = $map['FileURL'];
        }
        if (isset($map['Fps'])) {
            $model->fps = $map['Fps'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['OutputType'])) {
            $model->outputType = $map['OutputType'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }
        if (isset($map['VideoStreamList'])) {
            if (!empty($map['VideoStreamList'])) {
                $model->videoStreamList = [];
                $n                      = 0;
                foreach ($map['VideoStreamList'] as $item) {
                    $model->videoStreamList[$n++] = null !== $item ? videoStreamList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
