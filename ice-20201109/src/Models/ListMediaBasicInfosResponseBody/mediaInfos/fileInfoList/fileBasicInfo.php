<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListMediaBasicInfosResponseBody\mediaInfos\fileInfoList;

use AlibabaCloud\Tea\Model;

class fileBasicInfo extends Model
{
    /**
     * @description The bitrate.
     *
     * @example 1912.13
     *
     * @var string
     */
    public $bitrate;

    /**
     * @description The time when the file was created.
     *
     * @example 2021-01-08T16:52:04Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The duration.
     *
     * @example 60.00000
     *
     * @var string
     */
    public $duration;

    /**
     * @description The file name.
     *
     * @example example.mp4
     *
     * @var string
     */
    public $fileName;

    /**
     * @description The file size. Unit: bytes.
     *
     * @example 14340962
     *
     * @var string
     */
    public $fileSize;

    /**
     * @description The file status.
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
     * @description The OSS URL of the file.
     *
     * @example http://example-bucket.oss-cn-shanghai.aliyuncs.com/example2.mp4?Expires=<ExpireTime>&OSSAccessKeyId=<OSSAccessKeyId>&Signature=<Signature>&security-token=<SecurityToken>
     *
     * @var string
     */
    public $fileUrl;

    /**
     * @description The container format.
     *
     * @example mov,mp4,m4a,3gp,3g2,mj2
     *
     * @var string
     */
    public $formatName;

    /**
     * @description The height.
     *
     * @example 720
     *
     * @var string
     */
    public $height;

    /**
     * @description The time when the file was last modified.
     *
     * @example 2021-01-08T16:52:07Z
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description The region in which the file resides.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $region;

    /**
     * @description The width.
     *
     * @example 1280
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
