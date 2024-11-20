<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SubmitMediaInfoJobResponseBody\mediaInfoJob\mediaInfoProperty;

use AlibabaCloud\Tea\Model;

class fileBasicInfo extends Model
{
    /**
     * @description The video bitrate.
     *
     * @example 888.563
     *
     * @var string
     */
    public $bitrate;

    /**
     * @description The duration of the video.
     *
     * @example 403.039999
     *
     * @var string
     */
    public $duration;

    /**
     * @description The file name.
     *
     * @example file.m3u8
     *
     * @var string
     */
    public $fileName;

    /**
     * @description The file size.
     *
     * @example 31737
     *
     * @var string
     */
    public $fileSize;

    /**
     * @description The state of the file.
     *
     * @example Normal
     *
     * @var string
     */
    public $fileStatus;

    /**
     * @description The file type.
     *
     * @example source_file
     *
     * @var string
     */
    public $fileType;

    /**
     * @description The URL of the file.
     *
     * @example http://bucket.oss-cn-shanghai.aliyuncs.com/path/to/file.m3u8
     *
     * @var string
     */
    public $fileUrl;

    /**
     * @description The name of the video format.
     *
     * @example hls,applehttp
     *
     * @var string
     */
    public $formatName;

    /**
     * @description The height of the output video.
     *
     * @example 478
     *
     * @var string
     */
    public $height;

    /**
     * @description The ID of the media asset.
     *
     * @example 2b36bd19c13f4145b094c0cad80dbce5
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description The region in which the file resides.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $region;

    /**
     * @description The width of the output video.
     *
     * @example 848
     *
     * @var string
     */
    public $width;
    protected $_name = [
        'bitrate'    => 'Bitrate',
        'duration'   => 'Duration',
        'fileName'   => 'FileName',
        'fileSize'   => 'FileSize',
        'fileStatus' => 'FileStatus',
        'fileType'   => 'FileType',
        'fileUrl'    => 'FileUrl',
        'formatName' => 'FormatName',
        'height'     => 'Height',
        'mediaId'    => 'MediaId',
        'region'     => 'Region',
        'width'      => 'Width',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bitrate) {
            $res['Bitrate'] = $this->bitrate;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }
        if (null !== $this->fileStatus) {
            $res['FileStatus'] = $this->fileStatus;
        }
        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }
        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }
        if (null !== $this->formatName) {
            $res['FormatName'] = $this->formatName;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fileBasicInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bitrate'])) {
            $model->bitrate = $map['Bitrate'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }
        if (isset($map['FileStatus'])) {
            $model->fileStatus = $map['FileStatus'];
        }
        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }
        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }
        if (isset($map['FormatName'])) {
            $model->formatName = $map['FormatName'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
