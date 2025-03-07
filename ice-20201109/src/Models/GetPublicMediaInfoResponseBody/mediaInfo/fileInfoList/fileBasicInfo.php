<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetPublicMediaInfoResponseBody\mediaInfo\fileInfoList;

use AlibabaCloud\Tea\Model;

class fileBasicInfo extends Model
{
    /**
     * @example 192.0
     *
     * @var string
     */
    public $bitrate;

    /**
     * @example 16.2
     *
     * @var string
     */
    public $duration;

    /**
     * @example example.mp4
     *
     * @var string
     */
    public $fileName;

    /**
     * @example 27007
     *
     * @var string
     */
    public $fileSize;

    /**
     * @example Normal
     *
     * @var string
     */
    public $fileStatus;

    /**
     * @example source_file
     *
     * @var string
     */
    public $fileType;

    /**
     * @example http://example-bucket.cdn.domain.com/example.mp4
     *
     * @var string
     */
    public $fileUrl;

    /**
     * @example mp4
     *
     * @var string
     */
    public $formatName;

    /**
     * @example 0
     *
     * @var string
     */
    public $height;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $region;

    /**
     * @example 0
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
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
