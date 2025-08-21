<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateWmEmbedTaskRequest\csvControl;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateWmEmbedTaskRequest\documentControl;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateWmEmbedTaskRequest\imageControl;

class CreateWmEmbedTaskRequest extends Model
{
    /**
     * @var csvControl
     */
    public $csvControl;

    /**
     * @var documentControl
     */
    public $documentControl;

    /**
     * @var string
     */
    public $fileUrl;

    /**
     * @var string
     */
    public $filename;

    /**
     * @var imageControl
     */
    public $imageControl;

    /**
     * @var int
     */
    public $imageEmbedJpegQuality;

    /**
     * @var int
     */
    public $imageEmbedLevel;

    /**
     * @var string
     */
    public $videoBitrate;

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
        'csvControl' => 'CsvControl',
        'documentControl' => 'DocumentControl',
        'fileUrl' => 'FileUrl',
        'filename' => 'Filename',
        'imageControl' => 'ImageControl',
        'imageEmbedJpegQuality' => 'ImageEmbedJpegQuality',
        'imageEmbedLevel' => 'ImageEmbedLevel',
        'videoBitrate' => 'VideoBitrate',
        'videoIsLong' => 'VideoIsLong',
        'wmInfoBytesB64' => 'WmInfoBytesB64',
        'wmInfoSize' => 'WmInfoSize',
        'wmInfoUint' => 'WmInfoUint',
        'wmType' => 'WmType',
    ];

    public function validate()
    {
        if (null !== $this->csvControl) {
            $this->csvControl->validate();
        }
        if (null !== $this->documentControl) {
            $this->documentControl->validate();
        }
        if (null !== $this->imageControl) {
            $this->imageControl->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->csvControl) {
            $res['CsvControl'] = null !== $this->csvControl ? $this->csvControl->toArray($noStream) : $this->csvControl;
        }

        if (null !== $this->documentControl) {
            $res['DocumentControl'] = null !== $this->documentControl ? $this->documentControl->toArray($noStream) : $this->documentControl;
        }

        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }

        if (null !== $this->filename) {
            $res['Filename'] = $this->filename;
        }

        if (null !== $this->imageControl) {
            $res['ImageControl'] = null !== $this->imageControl ? $this->imageControl->toArray($noStream) : $this->imageControl;
        }

        if (null !== $this->imageEmbedJpegQuality) {
            $res['ImageEmbedJpegQuality'] = $this->imageEmbedJpegQuality;
        }

        if (null !== $this->imageEmbedLevel) {
            $res['ImageEmbedLevel'] = $this->imageEmbedLevel;
        }

        if (null !== $this->videoBitrate) {
            $res['VideoBitrate'] = $this->videoBitrate;
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
        if (isset($map['CsvControl'])) {
            $model->csvControl = csvControl::fromMap($map['CsvControl']);
        }

        if (isset($map['DocumentControl'])) {
            $model->documentControl = documentControl::fromMap($map['DocumentControl']);
        }

        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }

        if (isset($map['Filename'])) {
            $model->filename = $map['Filename'];
        }

        if (isset($map['ImageControl'])) {
            $model->imageControl = imageControl::fromMap($map['ImageControl']);
        }

        if (isset($map['ImageEmbedJpegQuality'])) {
            $model->imageEmbedJpegQuality = $map['ImageEmbedJpegQuality'];
        }

        if (isset($map['ImageEmbedLevel'])) {
            $model->imageEmbedLevel = $map['ImageEmbedLevel'];
        }

        if (isset($map['VideoBitrate'])) {
            $model->videoBitrate = $map['VideoBitrate'];
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
