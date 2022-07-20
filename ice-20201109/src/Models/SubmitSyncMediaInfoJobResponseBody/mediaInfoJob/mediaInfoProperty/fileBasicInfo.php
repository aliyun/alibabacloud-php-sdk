<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SubmitSyncMediaInfoJobResponseBody\mediaInfoJob\mediaInfoProperty;

use AlibabaCloud\Tea\Model;

class fileBasicInfo extends Model
{
    /**
     * @description 视频码率
     *
     * @var string
     */
    public $bitrate;

    /**
     * @description 视频时长
     *
     * @var string
     */
    public $duration;

    /**
     * @description 文件名
     *
     * @var string
     */
    public $fileName;

    /**
     * @description 文件大小
     *
     * @var string
     */
    public $fileSize;

    /**
     * @description 文件状态
     *
     * @var string
     */
    public $fileStatus;

    /**
     * @description 文件类型
     *
     * @var string
     */
    public $fileType;

    /**
     * @description 文件url
     *
     * @var string
     */
    public $fileUrl;

    /**
     * @description 视频格式名称
     *
     * @var string
     */
    public $formatName;

    /**
     * @description 高
     *
     * @var string
     */
    public $height;

    /**
     * @description 媒资ID
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description 文件所在区域
     *
     * @var string
     */
    public $region;

    /**
     * @description 宽
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
