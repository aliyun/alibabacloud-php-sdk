<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetPlayInfoResponseBody\playInfoList;

use AlibabaCloud\Tea\Model;

class playInfo extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $specification;

    /**
     * @var string
     */
    public $narrowBandType;

    /**
     * @var int
     */
    public $height;

    /**
     * @var string
     */
    public $bitrate;

    /**
     * @var string
     */
    public $modificationTime;

    /**
     * @var string
     */
    public $watermarkId;

    /**
     * @var int
     */
    public $encrypt;

    /**
     * @var string
     */
    public $definition;

    /**
     * @var string
     */
    public $encryptType;

    /**
     * @var string
     */
    public $streamType;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var int
     */
    public $size;

    /**
     * @var int
     */
    public $width;

    /**
     * @var string
     */
    public $fps;

    /**
     * @var string
     */
    public $duration;

    /**
     * @var string
     */
    public $playURL;

    /**
     * @var string
     */
    public $format;
    protected $_name = [
        'status'           => 'Status',
        'creationTime'     => 'CreationTime',
        'specification'    => 'Specification',
        'narrowBandType'   => 'NarrowBandType',
        'height'           => 'Height',
        'bitrate'          => 'Bitrate',
        'modificationTime' => 'ModificationTime',
        'watermarkId'      => 'WatermarkId',
        'encrypt'          => 'Encrypt',
        'definition'       => 'Definition',
        'encryptType'      => 'EncryptType',
        'streamType'       => 'StreamType',
        'jobId'            => 'JobId',
        'size'             => 'Size',
        'width'            => 'Width',
        'fps'              => 'Fps',
        'duration'         => 'Duration',
        'playURL'          => 'PlayURL',
        'format'           => 'Format',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->specification) {
            $res['Specification'] = $this->specification;
        }
        if (null !== $this->narrowBandType) {
            $res['NarrowBandType'] = $this->narrowBandType;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->bitrate) {
            $res['Bitrate'] = $this->bitrate;
        }
        if (null !== $this->modificationTime) {
            $res['ModificationTime'] = $this->modificationTime;
        }
        if (null !== $this->watermarkId) {
            $res['WatermarkId'] = $this->watermarkId;
        }
        if (null !== $this->encrypt) {
            $res['Encrypt'] = $this->encrypt;
        }
        if (null !== $this->definition) {
            $res['Definition'] = $this->definition;
        }
        if (null !== $this->encryptType) {
            $res['EncryptType'] = $this->encryptType;
        }
        if (null !== $this->streamType) {
            $res['StreamType'] = $this->streamType;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }
        if (null !== $this->fps) {
            $res['Fps'] = $this->fps;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->playURL) {
            $res['PlayURL'] = $this->playURL;
        }
        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return playInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Specification'])) {
            $model->specification = $map['Specification'];
        }
        if (isset($map['NarrowBandType'])) {
            $model->narrowBandType = $map['NarrowBandType'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Bitrate'])) {
            $model->bitrate = $map['Bitrate'];
        }
        if (isset($map['ModificationTime'])) {
            $model->modificationTime = $map['ModificationTime'];
        }
        if (isset($map['WatermarkId'])) {
            $model->watermarkId = $map['WatermarkId'];
        }
        if (isset($map['Encrypt'])) {
            $model->encrypt = $map['Encrypt'];
        }
        if (isset($map['Definition'])) {
            $model->definition = $map['Definition'];
        }
        if (isset($map['EncryptType'])) {
            $model->encryptType = $map['EncryptType'];
        }
        if (isset($map['StreamType'])) {
            $model->streamType = $map['StreamType'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }
        if (isset($map['Fps'])) {
            $model->fps = $map['Fps'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['PlayURL'])) {
            $model->playURL = $map['PlayURL'];
        }
        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }

        return $model;
    }
}
