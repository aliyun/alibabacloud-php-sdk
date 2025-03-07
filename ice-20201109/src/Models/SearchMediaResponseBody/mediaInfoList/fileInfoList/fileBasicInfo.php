<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaResponseBody\mediaInfoList\fileInfoList;

use AlibabaCloud\Tea\Model;

class fileBasicInfo extends Model
{
    /**
     * @description The bitrate of the file.
     *
     * @example 1912.13
     *
     * @var string
     */
    public $bitrate;

    /**
     * @description The time when the file was created.
     *
     * @example 2022-05-30T02:02:17Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The duration of the file.
     *
     * @example 60.00000
     *
     * @var string
     */
    public $duration;

    /**
     * @description The name of the file.
     *
     * @example 164265080291300080527050.wav
     *
     * @var string
     */
    public $fileName;

    /**
     * @description The size of the file in bytes.
     *
     * @example 324784
     *
     * @var string
     */
    public $fileSize;

    /**
     * @description The status of the file.
     *
     * @example Normal
     *
     * @var string
     */
    public $fileStatus;

    /**
     * @description The type of the file.
     *
     * @example source_file
     *
     * @var string
     */
    public $fileType;

    /**
     * @description The Object Storage Service (OSS) URL of the file.
     *
     * @example https://outin-d3f4681ddfd911ec99a600163e1403e7.oss-cn-shanghai.aliyuncs.com/sv/23d5cdd1-18180984899/23d5cdd1-18180984899.mp4
     *
     * @var string
     */
    public $fileUrl;

    /**
     * @description The encapsulation format of the file.
     *
     * @example mov,mp4,m4a,3gp,3g2,mj2
     *
     * @var string
     */
    public $formatName;

    /**
     * @description The height of the file.
     *
     * @example 480
     *
     * @var string
     */
    public $height;

    /**
     * @description The time when the file was last modified.
     *
     * @example 2021-12-10T12:19Z
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description The region in which the file is stored.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $region;

    /**
     * @description The width of the file.
     *
     * @example 1920
     *
     * @var string
     */
    public $width;
    protected $_name = [
        'bitrate'      => 'Bitrate',
        'createTime'   => 'CreateTime',
        'duration'     => 'Duration',
        'fileName'     => 'FileName',
        'fileSize'     => 'FileSize',
        'fileStatus'   => 'FileStatus',
        'fileType'     => 'FileType',
        'fileUrl'      => 'FileUrl',
        'formatName'   => 'FormatName',
        'height'       => 'Height',
        'modifiedTime' => 'ModifiedTime',
        'region'       => 'Region',
        'width'        => 'Width',
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
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
