<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetEditingProjectMaterialsResponseBody\mediaInfos\fileInfoList;

use AlibabaCloud\Tea\Model;

class fileBasicInfo extends Model
{
    /**
     * @description 文件名
     *
     * @var string
     */
    public $fileName;

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
     * @description 文件大小（字节）
     *
     * @var string
     */
    public $fileSize;

    /**
     * @description 文件oss地址
     *
     * @var string
     */
    public $fileUrl;

    /**
     * @description 文件存储区域
     *
     * @var string
     */
    public $region;

    /**
     * @description 封装格式
     *
     * @var string
     */
    public $formatName;

    /**
     * @description 时长
     *
     * @var string
     */
    public $duration;

    /**
     * @description 码率
     *
     * @var string
     */
    public $bitrate;

    /**
     * @description 宽
     *
     * @var string
     */
    public $width;

    /**
     * @description 高
     *
     * @var string
     */
    public $height;
    protected $_name = [
        'fileName'   => 'FileName',
        'fileStatus' => 'FileStatus',
        'fileType'   => 'FileType',
        'fileSize'   => 'FileSize',
        'fileUrl'    => 'FileUrl',
        'region'     => 'Region',
        'formatName' => 'FormatName',
        'duration'   => 'Duration',
        'bitrate'    => 'Bitrate',
        'width'      => 'Width',
        'height'     => 'Height',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->fileStatus) {
            $res['FileStatus'] = $this->fileStatus;
        }
        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }
        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }
        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->formatName) {
            $res['FormatName'] = $this->formatName;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->bitrate) {
            $res['Bitrate'] = $this->bitrate;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
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
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['FileStatus'])) {
            $model->fileStatus = $map['FileStatus'];
        }
        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }
        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }
        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['FormatName'])) {
            $model->formatName = $map['FormatName'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Bitrate'])) {
            $model->bitrate = $map['Bitrate'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }

        return $model;
    }
}
