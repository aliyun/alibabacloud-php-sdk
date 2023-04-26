<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetMezzanineInfoResponseBody;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetMezzanineInfoResponseBody\mezzanine\audioStreamList;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMezzanineInfoResponseBody\mezzanine\videoStreamList;
use AlibabaCloud\Tea\Model;

class mezzanine extends Model
{
    /**
     * @description The language.
     *
     * @var audioStreamList[]
     */
    public $audioStreamList;

    /**
     * @description The type of the mezzanine file URL. Valid values:
     *
     * - **oss**: OSS URL
     * - **cdn** (default): Content Delivery Network (CDN) URL
     *
     * > If the mezzanine file is stored in a bucket of the in type, only an OSS URL is returned.
     * @example 771.2280
     *
     * @var string
     */
    public $bitrate;

    /**
     * @description The information about the mezzanine file.
     *
     * @example 2017-11-14T09:15:50Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The type of additional information. Separate multiple values with commas (,). By default, only the basic information is returned. Valid values:
     *
     *   **video**: video stream information
     *   **audio**: audio stream information
     *
     * @example 42.4930
     *
     * @var string
     */
    public $duration;

    /**
     * @description The language.
     *
     * @example 27ffc438-164h67f57ef-0005-6884-51a-1****.mp4
     *
     * @var string
     */
    public $fileName;

    /**
     * @description The beginning of the time range that was queried. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example http://example-bucket-****.oss-cn-shanghai.aliyuncs.com/27ffc438-164h67f57ef-0005-6884-51a-1****.mp4
     *
     * @var string
     */
    public $fileURL;

    /**
     * @description The sample aspect ratio.
     *
     * @example 25.0000
     *
     * @var string
     */
    public $fps;

    /**
     * @description The height of the video resolution.
     *
     * @example 540
     *
     * @var int
     */
    public $height;

    /**
     * @description The total number of frames.
     *
     * @example oss
     *
     * @var string
     */
    public $outputType;

    /**
     * @var string
     */
    public $restoreExpiration;

    /**
     * @var string
     */
    public $restoreStatus;

    /**
     * @description The duration of the file. Unit: seconds.
     *
     * @example 4096477
     *
     * @var int
     */
    public $size;

    /**
     * @description The validity period of the mezzanine file URL. Unit: seconds. Default value: **1800**. Minimum value: **1**.
     *
     *   If the OutputType parameter is set to **cdn**:
     *
     *   The mezzanine file URL has a validity period only if URL signing is enabled. Otherwise, the mezzanine file URL is permanently valid.
     *   Minimum value: **1**.
     *   Maximum Value: unlimited.
     *   Default value: If you do not set this parameter, the default validity period that is specified in URL signing is used.
     *
     * <!---->
     *
     *   If the OutputType parameter is set to **oss**:
     *
     *   The mezzanine file URL has a validity period only if the permissions on the Object Storage Service (OSS) bucket are private. Otherwise, the mezzanine file URL is permanently valid.
     *   Minimum value: **1**.
     *   Maximum value: **2592000** (30 days). The maximum value is limited to reduce security risks of the origin.
     *   Default value: If you do not set this parameter, the default value is **3600**.
     *
     * @example Normal
     *
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $storageClass;

    /**
     * @description The average frame rate.
     *
     * @example 1f1a6fc03ca04814031b8a6559e****
     *
     * @var string
     */
    public $videoId;

    /**
     * @description The output layout of the sound channels. Valid values:
     *
     *   **mono**: mono sound channel
     *   **stereo**: two sound channels
     *
     * @var videoStreamList[]
     */
    public $videoStreamList;

    /**
     * @description The tag of the codec format.
     *
     * @example 960
     *
     * @var int
     */
    public $width;
    protected $_name = [
        'audioStreamList'   => 'AudioStreamList',
        'bitrate'           => 'Bitrate',
        'creationTime'      => 'CreationTime',
        'duration'          => 'Duration',
        'fileName'          => 'FileName',
        'fileURL'           => 'FileURL',
        'fps'               => 'Fps',
        'height'            => 'Height',
        'outputType'        => 'OutputType',
        'restoreExpiration' => 'RestoreExpiration',
        'restoreStatus'     => 'RestoreStatus',
        'size'              => 'Size',
        'status'            => 'Status',
        'storageClass'      => 'StorageClass',
        'videoId'           => 'VideoId',
        'videoStreamList'   => 'VideoStreamList',
        'width'             => 'Width',
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
        if (null !== $this->restoreExpiration) {
            $res['RestoreExpiration'] = $this->restoreExpiration;
        }
        if (null !== $this->restoreStatus) {
            $res['RestoreStatus'] = $this->restoreStatus;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->storageClass) {
            $res['StorageClass'] = $this->storageClass;
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
        if (isset($map['RestoreExpiration'])) {
            $model->restoreExpiration = $map['RestoreExpiration'];
        }
        if (isset($map['RestoreStatus'])) {
            $model->restoreStatus = $map['RestoreStatus'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StorageClass'])) {
            $model->storageClass = $map['StorageClass'];
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
