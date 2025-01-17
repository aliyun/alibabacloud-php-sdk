<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetPlayInfoResponseBody;

use AlibabaCloud\Dara\Model;

class playInfoList extends Model
{
    /**
     * @var int
     */
    public $bitDepth;
    /**
     * @var string
     */
    public $bitrate;
    /**
     * @var string
     */
    public $creationTime;
    /**
     * @var string
     */
    public $definition;
    /**
     * @var string
     */
    public $duration;
    /**
     * @var int
     */
    public $encrypt;
    /**
     * @var string
     */
    public $encryptType;
    /**
     * @var string
     */
    public $fileURL;
    /**
     * @var string
     */
    public $format;
    /**
     * @var string
     */
    public $fps;
    /**
     * @var string
     */
    public $HDRType;
    /**
     * @var int
     */
    public $height;
    /**
     * @var string
     */
    public $jobId;
    /**
     * @var string
     */
    public $modificationTime;
    /**
     * @var string
     */
    public $narrowBandType;
    /**
     * @var string
     */
    public $playURL;
    /**
     * @var int
     */
    public $size;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $streamTags;
    /**
     * @var string
     */
    public $streamType;
    /**
     * @var string
     */
    public $transTemplateType;
    /**
     * @var string
     */
    public $watermarkId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
