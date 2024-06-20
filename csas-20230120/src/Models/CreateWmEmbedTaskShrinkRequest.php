<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class CreateWmEmbedTaskShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $documentControlShrink;

    /**
     * @description This parameter is required.
     *
     * @example https://example.com/abc****.pdf
     *
     * @var string
     */
    public $fileUrl;

    /**
     * @description This parameter is required.
     *
     * @example abc****.pdf
     *
     * @var string
     */
    public $filename;

    /**
     * @example 95
     *
     * @var int
     */
    public $imageEmbedJpegQuality;

    /**
     * @example 2
     *
     * @var int
     */
    public $imageEmbedLevel;

    /**
     * @example 3000k
     *
     * @var string
     */
    public $videoBitrate;

    /**
     * @example false
     *
     * @var bool
     */
    public $videoIsLong;

    /**
     * @example aGVsbG8gc2F*****
     *
     * @var string
     */
    public $wmInfoBytesB64;

    /**
     * @example 32
     *
     * @var int
     */
    public $wmInfoSize;

    /**
     * @example 123***
     *
     * @var string
     */
    public $wmInfoUint;

    /**
     * @description This parameter is required.
     *
     * @example PureDocument
     *
     * @var string
     */
    public $wmType;
    protected $_name = [
        'documentControlShrink' => 'DocumentControl',
        'fileUrl'               => 'FileUrl',
        'filename'              => 'Filename',
        'imageEmbedJpegQuality' => 'ImageEmbedJpegQuality',
        'imageEmbedLevel'       => 'ImageEmbedLevel',
        'videoBitrate'          => 'VideoBitrate',
        'videoIsLong'           => 'VideoIsLong',
        'wmInfoBytesB64'        => 'WmInfoBytesB64',
        'wmInfoSize'            => 'WmInfoSize',
        'wmInfoUint'            => 'WmInfoUint',
        'wmType'                => 'WmType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->documentControlShrink) {
            $res['DocumentControl'] = $this->documentControlShrink;
        }
        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }
        if (null !== $this->filename) {
            $res['Filename'] = $this->filename;
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

    /**
     * @param array $map
     *
     * @return CreateWmEmbedTaskShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DocumentControl'])) {
            $model->documentControlShrink = $map['DocumentControl'];
        }
        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }
        if (isset($map['Filename'])) {
            $model->filename = $map['Filename'];
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
