<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaResponseBody\mediaInfoList\fileInfoList;

use AlibabaCloud\Dara\Model;

class fileBasicInfo extends Model
{
    /**
     * @var string
     */
    public $bitrate;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $duration;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $fileSize;

    /**
     * @var string
     */
    public $fileStatus;

    /**
     * @var string
     */
    public $fileType;

    /**
     * @var string
     */
    public $fileUrl;

    /**
     * @var string
     */
    public $formatName;

    /**
     * @var string
     */
    public $height;

    /**
     * @var string
     */
    public $imagesInput;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $width;
    protected $_name = [
        'bitrate' => 'Bitrate',
        'createTime' => 'CreateTime',
        'duration' => 'Duration',
        'fileName' => 'FileName',
        'fileSize' => 'FileSize',
        'fileStatus' => 'FileStatus',
        'fileType' => 'FileType',
        'fileUrl' => 'FileUrl',
        'formatName' => 'FormatName',
        'height' => 'Height',
        'imagesInput' => 'ImagesInput',
        'modifiedTime' => 'ModifiedTime',
        'region' => 'Region',
        'width' => 'Width',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->imagesInput) {
            $res['ImagesInput'] = $this->imagesInput;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['ImagesInput'])) {
            $model->imagesInput = $map['ImagesInput'];
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
