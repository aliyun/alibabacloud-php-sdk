<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetPlayInfoResponseBody;

use AlibabaCloud\Tea\Model;

class playInfoList extends Model
{
    /**
     * @example 8
     *
     * @var int
     */
    public $bitDepth;

    /**
     * @example 20
     *
     * @var string
     */
    public $bitrate;

    /**
     * @example 2022-05-10T02:28:49Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @example HD
     *
     * @var string
     */
    public $definition;

    /**
     * @example 9.0464
     *
     * @var string
     */
    public $duration;

    /**
     * @example 0
     *
     * @var int
     */
    public $encrypt;

    /**
     * @example AliyunVoDEncryption
     *
     * @var string
     */
    public $encryptType;

    /**
     * @example http://outin-***.oss-cn-shanghai.aliyuncs.com/sv/43a68ee9-181809b6aba/43a68ee9-181809b6aba.mpeg
     *
     * @var string
     */
    public $fileURL;

    /**
     * @example mp4
     *
     * @var string
     */
    public $format;

    /**
     * @example 25
     *
     * @var string
     */
    public $fps;

    /**
     * @example HDR
     *
     * @var string
     */
    public $HDRType;

    /**
     * @example 1080
     *
     * @var int
     */
    public $height;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @example 2022-05-13T11:39:41.714+08:00
     *
     * @var string
     */
    public $modificationTime;

    /**
     * @example 0
     *
     * @var string
     */
    public $narrowBandType;

    /**
     * @example https://***.aliyuncdn.com/sv/756bee1-17f980f0945/756bee1-17f980f0945.mp4
     *
     * @var string
     */
    public $playURL;

    /**
     * @example 418112
     *
     * @var int
     */
    public $size;

    /**
     * @example Normal
     *
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $streamTags;

    /**
     * @example video
     *
     * @var string
     */
    public $streamType;

    /**
     * @example Normal
     *
     * @var string
     */
    public $transTemplateType;

    /**
     * @example 5bed88672b1e2520ead228935ed51***
     *
     * @var string
     */
    public $watermarkId;

    /**
     * @example 1024
     *
     * @var int
     */
    public $width;
    protected $_name = [
        'bitDepth'          => 'BitDepth',
        'bitrate'           => 'Bitrate',
        'creationTime'      => 'CreationTime',
        'definition'        => 'Definition',
        'duration'          => 'Duration',
        'encrypt'           => 'Encrypt',
        'encryptType'       => 'EncryptType',
        'fileURL'           => 'FileURL',
        'format'            => 'Format',
        'fps'               => 'Fps',
        'HDRType'           => 'HDRType',
        'height'            => 'Height',
        'jobId'             => 'JobId',
        'modificationTime'  => 'ModificationTime',
        'narrowBandType'    => 'NarrowBandType',
        'playURL'           => 'PlayURL',
        'size'              => 'Size',
        'status'            => 'Status',
        'streamTags'        => 'StreamTags',
        'streamType'        => 'StreamType',
        'transTemplateType' => 'TransTemplateType',
        'watermarkId'       => 'WatermarkId',
        'width'             => 'Width',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bitDepth) {
            $res['BitDepth'] = $this->bitDepth;
        }
        if (null !== $this->bitrate) {
            $res['Bitrate'] = $this->bitrate;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->definition) {
            $res['Definition'] = $this->definition;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->encrypt) {
            $res['Encrypt'] = $this->encrypt;
        }
        if (null !== $this->encryptType) {
            $res['EncryptType'] = $this->encryptType;
        }
        if (null !== $this->fileURL) {
            $res['FileURL'] = $this->fileURL;
        }
        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }
        if (null !== $this->fps) {
            $res['Fps'] = $this->fps;
        }
        if (null !== $this->HDRType) {
            $res['HDRType'] = $this->HDRType;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->modificationTime) {
            $res['ModificationTime'] = $this->modificationTime;
        }
        if (null !== $this->narrowBandType) {
            $res['NarrowBandType'] = $this->narrowBandType;
        }
        if (null !== $this->playURL) {
            $res['PlayURL'] = $this->playURL;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->streamTags) {
            $res['StreamTags'] = $this->streamTags;
        }
        if (null !== $this->streamType) {
            $res['StreamType'] = $this->streamType;
        }
        if (null !== $this->transTemplateType) {
            $res['TransTemplateType'] = $this->transTemplateType;
        }
        if (null !== $this->watermarkId) {
            $res['WatermarkId'] = $this->watermarkId;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return playInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BitDepth'])) {
            $model->bitDepth = $map['BitDepth'];
        }
        if (isset($map['Bitrate'])) {
            $model->bitrate = $map['Bitrate'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Definition'])) {
            $model->definition = $map['Definition'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Encrypt'])) {
            $model->encrypt = $map['Encrypt'];
        }
        if (isset($map['EncryptType'])) {
            $model->encryptType = $map['EncryptType'];
        }
        if (isset($map['FileURL'])) {
            $model->fileURL = $map['FileURL'];
        }
        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }
        if (isset($map['Fps'])) {
            $model->fps = $map['Fps'];
        }
        if (isset($map['HDRType'])) {
            $model->HDRType = $map['HDRType'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['ModificationTime'])) {
            $model->modificationTime = $map['ModificationTime'];
        }
        if (isset($map['NarrowBandType'])) {
            $model->narrowBandType = $map['NarrowBandType'];
        }
        if (isset($map['PlayURL'])) {
            $model->playURL = $map['PlayURL'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StreamTags'])) {
            $model->streamTags = $map['StreamTags'];
        }
        if (isset($map['StreamType'])) {
            $model->streamType = $map['StreamType'];
        }
        if (isset($map['TransTemplateType'])) {
            $model->transTemplateType = $map['TransTemplateType'];
        }
        if (isset($map['WatermarkId'])) {
            $model->watermarkId = $map['WatermarkId'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
