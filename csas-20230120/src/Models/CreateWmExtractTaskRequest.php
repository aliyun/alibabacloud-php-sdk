<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\SDK\Csas\V20230120\Models\CreateWmExtractTaskRequest\csvControl;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateWmExtractTaskRequest\imageExtractParamsOpenApi;
use AlibabaCloud\Tea\Model;

class CreateWmExtractTaskRequest extends Model
{
    /**
     * @description The CSV watermark control parameter. You must keep the value of this parameter consistent for watermark embedding and watermark extraction. Otherwise, the extraction fails.
     *
     * @var csvControl
     */
    public $csvControl;

    /**
     * @description The document watermark parameter that specifies whether the file to be extracted is a screenshot of a document with a background watermark added. The system determines whether to use the extraction logic for document background watermarks based on whether the file to be extracted is an image file. By default, you do not need to configure this parameter. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $documentIsCapture;

    /**
     * @description The URL used to download the file to be extracted. The URL must be accessible over the Internet.
     *
     * This parameter is required.
     *
     * @example https://example.com/test-****.pdf
     *
     * @var string
     */
    public $fileUrl;

    /**
     * @description The name of the file to be extracted. The system needs to check the file type based on the file name extension.
     *
     * This parameter is required.
     *
     * @example test-****.pdf
     *
     * @var string
     */
    public $filename;

    /**
     * @var imageExtractParamsOpenApi
     */
    public $imageExtractParamsOpenApi;

    /**
     * @var bool
     */
    public $isClientEmbed;

    /**
     * @description The watermark parameter for videos that specifies whether to use the long video watermark SDK. Default value: false. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $videoIsLong;

    /**
     * @description The watermark parameter for long videos that specifies the video speed factor. The value can be a floating-point number or a string. Default value: 1. This parameter indicates the speed at which a watermark is added or the time-stretching rate for videos after a watermark is added.
     *
     * @example 1
     *
     * @var string
     */
    public $videoSpeed;

    /**
     * @description The watermark information size. Default value: 32. You must keep the value of this parameter consistent for watermark embedding and watermark extraction. For example, if a 40-bit watermark is used for watermark embedding, you must set this parameter to 40 for watermark extraction.
     *
     * @example 32
     *
     * @var int
     */
    public $wmInfoSize;

    /**
     * @description The watermark type. Valid values:
     *
     *   **PureWebappInvisible**: web page watermark
     *   **PureAppInvisible**: app watermark
     *   **PureScreenInvisible**: screen watermark
     *   **PureDocument**: document watermark
     *   **PureImage**: image watermark
     *   **PureAudio**: audio watermark
     *   **PureVideo**: video watermark
     *   **AigcWebappInvisible**: artificial intelligence generated content (AIGC)-based webpage watermark
     *   **AigcAppInvisible**: AIGC-based app watermark
     *   **AigcScreenInvisible**: AIGC-based screen watermark
     *   **AigcDocument**: AIGC-based document watermark
     *   **AigcImage**: AIGC-based image watermark
     *   **AigcAudio**: AIGC-based audio watermark
     *   **AigcVideo**: AIGC-based video watermark
     *
     * This parameter is required.
     *
     * @example PureDocument
     *
     * @var string
     */
    public $wmType;
    protected $_name = [
        'csvControl' => 'CsvControl',
        'documentIsCapture' => 'DocumentIsCapture',
        'fileUrl' => 'FileUrl',
        'filename' => 'Filename',
        'imageExtractParamsOpenApi' => 'ImageExtractParamsOpenApi',
        'isClientEmbed' => 'IsClientEmbed',
        'videoIsLong' => 'VideoIsLong',
        'videoSpeed' => 'VideoSpeed',
        'wmInfoSize' => 'WmInfoSize',
        'wmType' => 'WmType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->csvControl) {
            $res['CsvControl'] = null !== $this->csvControl ? $this->csvControl->toMap() : null;
        }
        if (null !== $this->documentIsCapture) {
            $res['DocumentIsCapture'] = $this->documentIsCapture;
        }
        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }
        if (null !== $this->filename) {
            $res['Filename'] = $this->filename;
        }
        if (null !== $this->imageExtractParamsOpenApi) {
            $res['ImageExtractParamsOpenApi'] = null !== $this->imageExtractParamsOpenApi ? $this->imageExtractParamsOpenApi->toMap() : null;
        }
        if (null !== $this->isClientEmbed) {
            $res['IsClientEmbed'] = $this->isClientEmbed;
        }
        if (null !== $this->videoIsLong) {
            $res['VideoIsLong'] = $this->videoIsLong;
        }
        if (null !== $this->videoSpeed) {
            $res['VideoSpeed'] = $this->videoSpeed;
        }
        if (null !== $this->wmInfoSize) {
            $res['WmInfoSize'] = $this->wmInfoSize;
        }
        if (null !== $this->wmType) {
            $res['WmType'] = $this->wmType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateWmExtractTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CsvControl'])) {
            $model->csvControl = csvControl::fromMap($map['CsvControl']);
        }
        if (isset($map['DocumentIsCapture'])) {
            $model->documentIsCapture = $map['DocumentIsCapture'];
        }
        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }
        if (isset($map['Filename'])) {
            $model->filename = $map['Filename'];
        }
        if (isset($map['ImageExtractParamsOpenApi'])) {
            $model->imageExtractParamsOpenApi = imageExtractParamsOpenApi::fromMap($map['ImageExtractParamsOpenApi']);
        }
        if (isset($map['IsClientEmbed'])) {
            $model->isClientEmbed = $map['IsClientEmbed'];
        }
        if (isset($map['VideoIsLong'])) {
            $model->videoIsLong = $map['VideoIsLong'];
        }
        if (isset($map['VideoSpeed'])) {
            $model->videoSpeed = $map['VideoSpeed'];
        }
        if (isset($map['WmInfoSize'])) {
            $model->wmInfoSize = $map['WmInfoSize'];
        }
        if (isset($map['WmType'])) {
            $model->wmType = $map['WmType'];
        }

        return $model;
    }
}
