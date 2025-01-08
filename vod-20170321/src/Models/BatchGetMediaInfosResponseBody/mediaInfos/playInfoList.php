<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\BatchGetMediaInfosResponseBody\mediaInfos;

use AlibabaCloud\Tea\Model;

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
    public $codecName;

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
    public $encryptMode;

    /**
     * @var string
     */
    public $encryptType;

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
    public $jobExt;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var int
     */
    public $jobType;

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
    public $specification;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $streamType;

    /**
     * @var string
     */
    public $templateGroupId;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $watermarkId;

    /**
     * @var int
     */
    public $width;
    protected $_name = [
        'bitDepth'         => 'BitDepth',
        'bitrate'          => 'Bitrate',
        'codecName'        => 'CodecName',
        'creationTime'     => 'CreationTime',
        'definition'       => 'Definition',
        'duration'         => 'Duration',
        'encrypt'          => 'Encrypt',
        'encryptMode'      => 'EncryptMode',
        'encryptType'      => 'EncryptType',
        'format'           => 'Format',
        'fps'              => 'Fps',
        'HDRType'          => 'HDRType',
        'height'           => 'Height',
        'jobExt'           => 'JobExt',
        'jobId'            => 'JobId',
        'jobType'          => 'JobType',
        'modificationTime' => 'ModificationTime',
        'narrowBandType'   => 'NarrowBandType',
        'playURL'          => 'PlayURL',
        'size'             => 'Size',
        'specification'    => 'Specification',
        'status'           => 'Status',
        'streamType'       => 'StreamType',
        'templateGroupId'  => 'TemplateGroupId',
        'templateId'       => 'TemplateId',
        'watermarkId'      => 'WatermarkId',
        'width'            => 'Width',
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
        if (null !== $this->codecName) {
            $res['CodecName'] = $this->codecName;
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
        if (null !== $this->encryptMode) {
            $res['EncryptMode'] = $this->encryptMode;
        }
        if (null !== $this->encryptType) {
            $res['EncryptType'] = $this->encryptType;
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
        if (null !== $this->jobExt) {
            $res['JobExt'] = $this->jobExt;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
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
        if (null !== $this->specification) {
            $res['Specification'] = $this->specification;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->streamType) {
            $res['StreamType'] = $this->streamType;
        }
        if (null !== $this->templateGroupId) {
            $res['TemplateGroupId'] = $this->templateGroupId;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
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
        if (isset($map['CodecName'])) {
            $model->codecName = $map['CodecName'];
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
        if (isset($map['EncryptMode'])) {
            $model->encryptMode = $map['EncryptMode'];
        }
        if (isset($map['EncryptType'])) {
            $model->encryptType = $map['EncryptType'];
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
        if (isset($map['JobExt'])) {
            $model->jobExt = $map['JobExt'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
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
        if (isset($map['Specification'])) {
            $model->specification = $map['Specification'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StreamType'])) {
            $model->streamType = $map['StreamType'];
        }
        if (isset($map['TemplateGroupId'])) {
            $model->templateGroupId = $map['TemplateGroupId'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
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
