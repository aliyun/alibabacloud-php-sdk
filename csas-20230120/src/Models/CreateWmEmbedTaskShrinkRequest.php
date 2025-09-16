<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class CreateWmEmbedTaskShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $audioControlShrink;

    /**
     * @var string
     */
    public $csvControlShrink;

    /**
     * @var string
     */
    public $documentControlShrink;

    /**
     * @var string
     */
    public $fileUrl;

    /**
     * @var string
     */
    public $filename;

    /**
     * @var string
     */
    public $imageControlShrink;

    /**
     * @var int
     */
    public $imageEmbedJpegQuality;

    /**
     * @var int
     */
    public $imageEmbedLevel;

    /**
     * @var bool
     */
    public $invisibleEnable;

    /**
     * @var string
     */
    public $videoBitrate;

    /**
     * @var string
     */
    public $videoControlShrink;

    /**
     * @var bool
     */
    public $videoIsLong;

    /**
     * @var string
     */
    public $wmInfoBytesB64;

    /**
     * @var int
     */
    public $wmInfoSize;

    /**
     * @var string
     */
    public $wmInfoUint;

    /**
     * @var string
     */
    public $wmType;
    protected $_name = [
        'audioControlShrink' => 'AudioControl',
        'csvControlShrink' => 'CsvControl',
        'documentControlShrink' => 'DocumentControl',
        'fileUrl' => 'FileUrl',
        'filename' => 'Filename',
        'imageControlShrink' => 'ImageControl',
        'imageEmbedJpegQuality' => 'ImageEmbedJpegQuality',
        'imageEmbedLevel' => 'ImageEmbedLevel',
        'invisibleEnable' => 'InvisibleEnable',
        'videoBitrate' => 'VideoBitrate',
        'videoControlShrink' => 'VideoControl',
        'videoIsLong' => 'VideoIsLong',
        'wmInfoBytesB64' => 'WmInfoBytesB64',
        'wmInfoSize' => 'WmInfoSize',
        'wmInfoUint' => 'WmInfoUint',
        'wmType' => 'WmType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audioControlShrink) {
            $res['AudioControl'] = $this->audioControlShrink;
        }

        if (null !== $this->csvControlShrink) {
            $res['CsvControl'] = $this->csvControlShrink;
        }

        if (null !== $this->documentControlShrink) {
            $res['DocumentControl'] = $this->documentControlShrink;
        }

        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }

        if (null !== $this->filename) {
            $res['Filename'] = $this->filename;
        }

        if (null !== $this->imageControlShrink) {
            $res['ImageControl'] = $this->imageControlShrink;
        }

        if (null !== $this->imageEmbedJpegQuality) {
            $res['ImageEmbedJpegQuality'] = $this->imageEmbedJpegQuality;
        }

        if (null !== $this->imageEmbedLevel) {
            $res['ImageEmbedLevel'] = $this->imageEmbedLevel;
        }

        if (null !== $this->invisibleEnable) {
            $res['InvisibleEnable'] = $this->invisibleEnable;
        }

        if (null !== $this->videoBitrate) {
            $res['VideoBitrate'] = $this->videoBitrate;
        }

        if (null !== $this->videoControlShrink) {
            $res['VideoControl'] = $this->videoControlShrink;
        }

        if (null !== $this->videoIsLong) {
            $res['VideoIsLong'] = $this->videoIsLong;
        }

        if (null !== $this->wmInfoBytesB64) {
            $res['WmInfoBytesB64'] = $this->wmInfoBytesB64;
        }

        if (null !== $this->wmInfoSize) {
            $res['WmInfoSize'] = $this->wmInfoSize;
        }

        if (null !== $this->wmInfoUint) {
            $res['WmInfoUint'] = $this->wmInfoUint;
        }

        if (null !== $this->wmType) {
            $res['WmType'] = $this->wmType;
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
        if (isset($map['AudioControl'])) {
            $model->audioControlShrink = $map['AudioControl'];
        }

        if (isset($map['CsvControl'])) {
            $model->csvControlShrink = $map['CsvControl'];
        }

        if (isset($map['DocumentControl'])) {
            $model->documentControlShrink = $map['DocumentControl'];
        }

        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }

        if (isset($map['Filename'])) {
            $model->filename = $map['Filename'];
        }

        if (isset($map['ImageControl'])) {
            $model->imageControlShrink = $map['ImageControl'];
        }

        if (isset($map['ImageEmbedJpegQuality'])) {
            $model->imageEmbedJpegQuality = $map['ImageEmbedJpegQuality'];
        }

        if (isset($map['ImageEmbedLevel'])) {
            $model->imageEmbedLevel = $map['ImageEmbedLevel'];
        }

        if (isset($map['InvisibleEnable'])) {
            $model->invisibleEnable = $map['InvisibleEnable'];
        }

        if (isset($map['VideoBitrate'])) {
            $model->videoBitrate = $map['VideoBitrate'];
        }

        if (isset($map['VideoControl'])) {
            $model->videoControlShrink = $map['VideoControl'];
        }

        if (isset($map['VideoIsLong'])) {
            $model->videoIsLong = $map['VideoIsLong'];
        }

        if (isset($map['WmInfoBytesB64'])) {
            $model->wmInfoBytesB64 = $map['WmInfoBytesB64'];
        }

        if (isset($map['WmInfoSize'])) {
            $model->wmInfoSize = $map['WmInfoSize'];
        }

        if (isset($map['WmInfoUint'])) {
            $model->wmInfoUint = $map['WmInfoUint'];
        }

        if (isset($map['WmType'])) {
            $model->wmType = $map['WmType'];
        }

        return $model;
    }
}
